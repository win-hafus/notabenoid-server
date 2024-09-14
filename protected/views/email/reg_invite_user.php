<?php
/**
 * @var RegInvite $invite
 */
?>
<p>Добрый день!</p>
<p>
	Помните, был такой сайт — notabenoid.com, его ещё потом умучали и закрыли борцы за авторское право?
	Так вот, он снова заработал, только в виде чрезвычайно закрытого и секретного клуба.
	Некто <?=$invite->sender->login; ?> приглашает вас в этот клуб вступить. Это приглашение — ваш единственный
	шанс туда попасть. Чтобы восстановить свою регистрацию на Нотабеноиде (а также все ваши переводы, комментарии,
	оценки, переписку), пожалуйста, пройдите по ссылке:
</p>
<p>
	<a href='<?=$invite->urlAccept; ?>'><?=$invite->urlAccept; ?></a>
</p>
<?php if($invite->message != ""): ?>
	<p>
		Кстати, <?=$invite->sender->login; ?> просил передать вам следующее:<br>
		<?=nl2br(htmlspecialchars($invite->message)); ?>
	</p>
<?php endif; ?>

<p style='color:#777; font-style:italic;'>P. S. Это письмо написано искусственным интеллектом, отвечать на него не надо.</p>