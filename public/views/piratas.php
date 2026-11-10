<?php require __DIR__ . '/partials/header.php'; ?>
<div class="cabecalho"><div><span class="eyebrow">MARINHA · ARQUIVO</span><h1>Cartazes de procurado</h1><p>Pesquisa por nome ou tripulação.</p></div></div>
<form class="pesquisa" method="get" action="index.php"><input type="hidden" name="acao" value="piratas"><input type="search" name="q" placeholder="Pesquisar pirata ou tripulação..." value="<?= htmlspecialchars($pesquisa, ENT_QUOTES, 'UTF-8') ?>"><button type="submit">Pesquisar</button></form>
<p class="contador"><?= count($piratas) ?> pirata(s) encontrado(s)</p>
<div class="grelha"><?php foreach ($piratas as $pirata): ?><article class="cartaz"><div class="simbolo"><?= htmlspecialchars($pirata['simbolo'], ENT_QUOTES, 'UTF-8') ?></div><span class="wanted">WANTED</span><h2><?= htmlspecialchars($pirata['nome'], ENT_QUOTES, 'UTF-8') ?></h2><p><?= htmlspecialchars($pirata['alcunha'], ENT_QUOTES, 'UTF-8') ?></p><div class="recompensa">฿ <?= number_format($pirata['recompensa'], 0, ',', '.') ?></div><a href="index.php?acao=detalhe&amp;id=<?= $pirata['id'] ?>">Consultar ficha →</a></article><?php endforeach; ?></div>
<?php if (!$piratas): ?><p class="vazio">Não foram encontrados piratas. Experimenta outra pesquisa.</p><?php endif; ?>
<?php require __DIR__ . '/partials/footer.php'; ?>
 