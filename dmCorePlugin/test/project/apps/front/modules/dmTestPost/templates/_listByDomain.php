<?php
// Dm test post : List by domain
// Vars : $dmTestPostPager

echo _open('div.dm_test_post.list_by_domain');

 echo $dmTestPostPager->renderNavigationTop();

  echo _open('ul.elements');

  foreach ($dmTestPostPager as $dmTestPost)
  {
    echo _open('li.element');
    
      echo _link($dmTestPost);
      
    echo _close('li');
  }

  echo _close('ul');

 echo $dmTestPostPager->renderNavigationBottom();

echo _close('div');