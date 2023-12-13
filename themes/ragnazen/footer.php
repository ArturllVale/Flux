<?php if (!defined('FLUX_ROOT'))
	exit; ?>

</div>
<div id="footer">
	<div class="container">
		<p class="text-muted">

			<!--Tema -->
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col">
				<?php if (count(Flux::$appConfig->get('ThemeName', false)) > 1): ?>
					<span>Tema:
						<select class="form-select" name="preferred_theme" onchange="updatePreferredTheme(this)">
							<?php foreach (Flux::$appConfig->get('ThemeName', false) as $themeName): ?>
								<option value="<?php echo htmlspecialchars($themeName) ?>" <?php if ($session->theme == $themeName)
									   echo ' selected="selected"' ?>>
									<?php echo htmlspecialchars($themeName) ?>
								</option>
							<?php endforeach ?>
						</select>
					</span>
				<?php endif ?>
				<!--Lingua -->
				<span>Language:
					<select class="form-select" name="preferred_language" onchange="updatePreferredLanguage(this)">
						<?php foreach (Flux::getAvailableLanguages() as $lang_key => $lang): ?>
							<option value="<?php echo htmlspecialchars($lang_key) ?>" <?php if (!empty($_COOKIE['language']) && $_COOKIE['language'] == $lang_key)
								   echo ' selected="selected"' ?>>
								<?php echo htmlspecialchars($lang) ?>
							</option>
						<?php endforeach ?>
					</select>
				</span>
				</p>
				<form action="<?php echo $this->urlWithQs ?>" method="post" name="preferred_theme_form"
					style="display: none">
					<input type="hidden" name="preferred_theme" value="" />
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	function updatePreferredServer(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		document.preferred_server_form.preferred_server.value = preferred;
		document.preferred_server_form.submit();
	}

	function updatePreferredTheme(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		document.preferred_theme_form.preferred_theme.value = preferred;
		document.preferred_theme_form.submit();
	}

	function updatePreferredLanguage(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		setCookie('language', preferred);
		reload();
	}

	// Preload spinner image.
	var spinner = new Image();
	spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';

	function refreshSecurityCode(imgSelector) {
		$(imgSelector).attr('src', spinner.src);

		// Load image, spinner will be active until loading is complete.
		var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
		var image = new Image();
		image.src = "<?php echo $this->url('captcha') ?>" + (clean ? '?nocache=' : '&nocache=') + Math.random();

		$(imgSelector).attr('src', image.src);
	}
	function toggleSearchForm() {
		//$('.search-form').toggle();
		$('.search-form').slideToggle('fast');
	}

	function setCookie(key, value) {
		var expires = new Date();
		expires.setTime(expires.getTime() + expires.getTime()); // never expires
		document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
	}
</script>

<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
	<script type="text/javascript">
		var RecaptchaOptions = {
			theme: '<?php echo Flux::config('ReCaptchaTheme') ?>'
		};
	</script>
<?php endif ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		var inputs = 'input[type=text],input[type=password],input[type=file]';
		$(inputs).focus(function () {
			$(this).css({
				'background-color': '#f9f5e7',
				'border-color': '#dcd7c7',
				'color': '#726c58'
			});
		});
		$(inputs).blur(function () {
			$(this).css({
				'backgroundColor': '#ffffff',
				'borderColor': '#dddddd',
				'color': '#444444'
			}, 500);
		});
		$('.menuitem a').hover(
			function () {
				$(this).fadeTo(200, 0.85);
				$(this).css('cursor', 'pointer');
			},
			function () {
				$(this).fadeTo(150, 1.00);
				$(this).css('cursor', 'normal');
			}
		);
		$('.money-input').keyup(function () {
			var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
			if (isNaN(creditValue))
				$('.credit-input').val('?');
			else
				$('.credit-input').val(creditValue);
		}).keyup();
		$('.credit-input').keyup(function () {
			var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
			if (isNaN(moneyValue))
				$('.money-input').val('?');
			else
				$('.money-input').val(moneyValue.toFixed(2));
		}).keyup();
	});

	function reload() { window.location.href = '<?php echo $this->url ?>'; }
</script>
<script>
	$('.instanciado').click(function () {
		$('.instanciado').removeClass('active');
		$(this).addClass('active');
	});

</script>
<script>
	const boxes = document.querySelectorAll(".box");
	let activeIndex = 1;
	let isTransitioning = false;

	function updateCurrentImg() {
		isTransitioning = true;

		boxes.forEach((box, index) => {
			const isActive = index === activeIndex;
			box.classList.toggle("expanded", isActive);
			box.classList.toggle("closed", !isActive);
		});

		setTimeout(() => {
			isTransitioning = false;
		}, 500);
	}

	function handleArrowKey(event) {
		if (isTransitioning) {
			return;
		}

		if (event.key === "ArrowRight") {
			activeIndex = (activeIndex + 1) % boxes.length;
		} else if (event.key === "ArrowLeft") {
			activeIndex = (activeIndex - 1 + boxes.length) % boxes.length;
		}

		updateCurrentImg();
	}

	function handleBoxClick(index) {
		if (isTransitioning) {
			return;
		}

		if (index === activeIndex && boxes[index].classList.contains("expanded")) {
			boxes.forEach((box) => box.classList.remove("closed", "expanded"));
			activeIndex = 0;
		} else {
			activeIndex = index;
			updateCurrentImg();
		}
	}

	document.addEventListener("keydown", handleArrowKey);

	updateCurrentImg();

	boxes.forEach((box, index) => {
		box.addEventListener("click", () => handleBoxClick(index));
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
	integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
	integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
	crossorigin="anonymous"></script>
</body>

</html>