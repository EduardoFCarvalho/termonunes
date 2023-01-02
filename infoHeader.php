<style>
.openInfo {
  position: relative;
  z-index: 9;
  border: 0;
  outline: none;
  background: none;

}

.contentInfo {
  position: fixed;
  right: 0;
  width: 350px;
  background: #ed3a1e;
  z-index: 9;
  top: 0;
  display: none;
  padding: 1rem;
  z-index: 99;
}

.contentInfo.show {
  display: block;
}

.closeInfo {
  z-index: 9;
  border: 0;
  outline: none;
  background: none;
  width: 30px;
  height: 30px;
}

.linkHeaderInfo {
  padding: 5px !important;
}
</style>
<?php include_once 'seo/lib/cfg.global.php'; ?>
<?php

$sqlHeader        = "SELECT pag_title, pag_url, ativo FROM seo";
$arrayParam = '';
$pageHeader  = $crud_subcat->getSQLGeneric($sqlHeader, $arrayParam, true);
?>
<button class='openInfo'><i class="fas fa-info"></i></button>

<div class="contentInfo">
  <button class='closeInfo'>X</button>

  <ul>

    <?php
        foreach ($pageHeader as $value) {
            if ($value->ativo) {
                echo '<li><a title="' . $value->pag_title . '" class="linkHeaderInfo" href="' . $value->pag_url . '">' . $value->pag_title . '</a></li>';
            }
        }

        ?>
  </ul>
</div>

<script>
const contentInfo = document.querySelector('.contentInfo')

document.querySelector('.closeInfo').addEventListener('click', function() {
  contentInfo.classList.remove('show')
})
document.querySelector('.openInfo').addEventListener('click', function() {
  contentInfo.classList.add('show')
});
</script>