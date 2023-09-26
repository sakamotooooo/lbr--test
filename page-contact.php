<?php
	/* Template Name:contactページ */
?>
<?php get_header() ;?>
<section class="contact">
	<div class="contact__inner inner">
		<div class="contact__wrap">
			<p class="contact__read">弊社へのお問い合わせは、メールフォームに必須事項をご記入の上、ご送信ください。<br>
				基本的にE-mailで返信させていただきます。</p>
			<p class="contact__text">Eメールアドレスに誤りがあると返信できないことがございますので、ご注意ください。</p>
			<span class="contact__fill-in">※の部分は必ずご記入ください</span>
		</div>
		<form action="" method="post" class="contact__form form">
			<!-- <div class="form__item">
				<label for="yourCompany" class="form__title">会社名<span class="form__required">※</span></label>
				<div class="form__input">
					<input type="text" id="yourCompany" name="your-company" placeholder="例：株式会社ABC" class="form__text"
						autocomplete="organization" required />
				</div>
			</div>
			<div class="form__item">
				<label for="yourName" class="form__title">お名前<span class="form__required">※</span></label>
				<div class="form__input">
					<input type="text" id="yourName" name="your-name" placeholder="例：山田 太郎" autocomplete="name" class="form__text"
						required />
				</div>
			</div>
			<div class="form__item">
				<label for="yourEmail" class="form__title">メールアドレス<span class="form__required">※</span></label>
				<div class="form__input">
					<input type="email" id="yourEmail" name="your-email" placeholder="example@xxx-fc.jp" autocomplete="email"
						class="form__text" required />
				</div>
			</div>
			<div class="form__item">
				<div class="form__title">お問い合わせ項目</div>

				<div class="form-radio">
					<label class="form-radio__label" for="request">
						<input name="radio" class="form-radio__input" type="radio" name="inquiry" id="request" value="清掃依頼" checked>
						<span class="form-radio__text">清掃依頼</span>
					</label>
					<label class="form-radio__label" for="recruit">
						<input name="radio" class="form-radio__input" type="radio" name="inquiry" id="recruit" value="採用関連">
						<span class="form-radio__text">採用関連</span>
					</label>
					<label class="form-radio__label" for="other">
						<input name="radio" class="form-radio__input" type="radio" name="inquiry" id="other" value="その他">
						<span class="form-radio__text">その他</span>
					</label>
				</div>
			</div>
			<div class="form__item form__item--textarea">
				<label for="yourContent" class="form__title">お問い合わせ内容<span class="form__required">※</span></label>
				<div class="form__input">
					<textarea id="yourContent" class="form__textarea" required></textarea>
				</div>
			</div>
			<p class="form__consent">※入力された個人情報は「<a href="">個人情報保護方針</a>」に基づき取り扱われることに同意するものとします。</p>
			<div class="form__submit-wrap">
				<input id="formButton" type="submit" class="form__submit" value="送信する">
			</div> -->
		</form>
		<?php the_content();?>
	</div>
</section>
<?php get_footer() ;?>