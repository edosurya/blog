<?php



// Menu::create('navbar', function($menu)
// {
// 	// $parent = App\Menu::where('level','1')->get();
// 	// $child = App\Menu::where('level','2')->get();

// 	$array_menu[] = "";
//     foreach ($parent as $key => $value) {

//     	$array_menu[$key] = array("title"=>$value["title"], 
//                                     "link"=>$value["link"], 
//                                     "id" => $value["id"],
//                                     "icon" => $value["icon"],
//                                     "order" => $value["order"],
//                                     "parent" => 0
//                                   );


//             foreach ($child as $key2 => $value2) {
//                 if ( $value2["parent"] == $value["id"] ) {
//                     $array_menu[$key]["sub_menu"][] = array("title"=>$value2["title"],
//                                                             "link"=>$value2["link"],
//                                                             "id"=>$value2["id"],
//                                                             "parent"=>$value["id"],
//                                                             "level" => 2
//                                                         );
//                 }
//             }    	
// 	}


// // print_r($array_menu);
//         foreach ($array_menu as $key => $value) {

//             // $url = NULL, $menu = NULL, $level = NULL, $current_url = NULL

//             if ($value['link'] != "") {
//                 $link = $value['link'];
//             }
//             else {
//                 $link = "javascript:void(0);";
//             }

//             if ( isset ( $value['sub_menu'] ) ) {

//             	$data ='a';

// 	        	$menu->dropdown('Settings', '7', function ($sub) {
// 			        	$sub->url('/settings/design', 'a');
// 	    			}
// 	    		);

//        //      	$sub_menu = $value['sub_menu']; 

//        //      	$GLOBALS['sub_menu'] = $value['sub_menu']; 
// 		     // 	$menu->dropdown('a', function ($sub) {
// 		     // 			// print_r($value['sub_menu']);

		     		
// 		     //        	foreach ($sub_menu as $key2 => $value2) {
// 		     //            	echo $key2; 
// 		     //            }
// 		     //    		// $sub->url($value2["link"], $value2["title"]);
// 		     //    	// }
// 		    	// });
//             }

//             else{
//                 $menu->url($value['link'], $value['title'], $value['order']); 
//             }

//         }

// 	// $menu->url($value['link'], $value['title']); 
//     // $menu->url('playlistmanager', 'Playlist Manager');
//     // $menu->url('music', 'Music Manager');
//     // $menu->url('/', 'Home');
//     // $menu->dropdown('Account', function ($sub) {
//     //     $sub->url('profile', 'Visit My Profile');
//     //     $sub->url('name', 'Visit web');

       
//     // });
// });


// 	function kata()
// 	{
// 		return 'aaaa';
// 	}

Menu::create('navbar', function($menu)
{
    	$menu->url('admin/dashboard', 'Dashboard');	
    	$menu->url('admin/user', 'Users');	

});