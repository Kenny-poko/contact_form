<?php 
// 全部がphpのコードの場合終了タグ入らない

// エスケープ処理をする関数
// $str: エスケープしたい文字
// return: エスケープした文字

function h($str) 
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
};

