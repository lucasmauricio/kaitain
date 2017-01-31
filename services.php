<?php
  $services = array(
                'wallach-ix' => 'Wallach IX',
                'ix' => 'IX',
                'balut' => 'Balut',
                'discovery' => 'Service Discovery'
              );
  $services_description = array(
                            'wallach-ix' => 'This is the collection API.',
                            'ix' => 'This is the item API.',
                            'balut' => 'This is the user API.',
                            'discovery' => 'API for register/discover services.'
                          );
  $services_key_word = array(
                            'wallach-ix' => 'Collection',
                            'ix' => 'Item',
                            'balut' => 'User',
                            'discovery' => 'Service'
                          );
  $services_items = array(
                            'wallach-ix' => array('id' => '103', 'name' => 'SW Characters', 'type' => 'Person' ),
                            'ix' => array('id' => '324', 'name' => 'Chewbacca', 'type' => 'Person' ),
                            'balut' => array('id' => '124', 'name' => 'John Doe', 'type' => 'Person' ),
                            'discovery' => array('id' => '532', 'name' => 'Balut', 'type' => 'User service' )
                          );
  $current_service = $_GET['service'];
  $current_name = $services[$current_service];
  $current_description = $services_description[$current_service];
  $current_key_word = $services_key_word[$current_service];
  $current_items = $services_items[$current_service];
?>
