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
  $current_service = $_GET['service'];
  $current_name = $services[$current_service];
  $current_description = $services_description[$current_service];

?>
