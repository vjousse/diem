<?php
// Dm test post : List by domain
// Vars : $dmTestPostPager

echo £o('div.dm_test_post.list_by_domain');

 echo $dmTestPostPager->renderNavigationTop();

  echo £o('ul.elements');

  foreach ($dmTestPostPager as $dmTestPost)
  {
    echo £o('li.element');
    
      echo £link($dmTestPost);
      
    echo £c('li');
  }

  echo £c('ul');

 echo $dmTestPostPager->renderNavigationBottom();

echo £c('div');