<?php

	/**
	 * Elgg header contents
	 * This file holds the header output that a user will see
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider
	 **/
	 
?>

<?php
     if (isloggedin()) {
?>

<!-- /#layout_header -->


<div id="navBar">
	    <div id="navWrap" style="padding-right:1px;">
        		     <ul id="nav">
	         <li><a href="<?php echo $vars['url']; ?>pg/dashboard/">Inicio</a></li>
			 			<li><a href="<?php echo $vars['url']; ?>pg/profile/<?php echo $_SESSION['user']->username; ?>">Perfil</a></li>
			 			<li><a href="<?php echo $vars['url']; ?>pg/messages/inbox/<?php echo $_SESSION['user']->username; ?>">Escritorio</a></li>
						<li><a href="<?php echo $vars['url']; ?>pg/friends/<?php echo $_SESSION['user']->username; ?>">Amigos</a></li>
						<li><a href="<?php echo $vars['url']; ?>pg/groups/all/">Grupos</a></li> 
	         
	         </ul>

	<?php
			echo elgg_view("navigation/topbar_tools");
	/**
	 * Elgg standard tools drop down
	 * This will be populated depending on the plugins active - only plugin navigation will appear here
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @author Curverider Ltd and customized by Juipo.com
	 * @link http://elgg.org/  and  http://juipo.com/
	 * 
	 */
	 
		$menu = get_register('menu');
		
		//var_export($menu);

		if (is_array($menu) && sizeof($menu) > 0) {
			$alphamenu = array();
			foreach($menu as $item) {
				$alphamenu[$item->name] = $item;
			}
			ksort($alphamenu);
		
?>

<ul id="nav">
    
	
      </ul>


<?php
		}
?>



	
	         <div id="nav_right" style="float:right;">
		<ul id="nav_avatar">
					<li></li>
</ul>	     

<ul id="nav">


			

<li><h1><a href="<?php echo $vars['url']; ?>pg/settings/" title="Ver y editar datos de mi cuenta">Mi Cuenta</a></h1></li>

	         
<?php
		
			// The administration link is for admin or site admin users only
				  if ($vars['user']->isAdmin()) {
		
		?>
		
			<li><a href="<?php echo $vars['url']; ?>pg/admin/" class="usersettings"><?php echo elgg_echo("admin"); ?></a></li>
		
		<?php
		
				}
		
		?>
        <li><?php echo elgg_view('output/url', array('href' => "{$vars['url']}action/logout", 'text' => elgg_echo('logout'), 'is_action' => TRUE)); ?></li>
</ul>

	    
	         </div>
	         </div><!-- /#navwrap -->

	</div><!-- /#navBar -->

<div id="page_container">
<div id="page_wrapper">

<?php } else { ?>

<div id="layout_header">
<div id="headerNew">
	
<div style="width:945px;margin:0 auto;padding-right:5px;">
		<div id="logo">        
		           	<a href="<?php echo $vars['url']; ?>"><img src="<?php echo $vars['url']; ?>mod/black_pod_free/graphics/logo.gif" alt="<?php echo $vars['config']->sitename; ?>" title="<?php echo $vars['config']->sitename; ?>" /></a>
				</div>
				
				<div id="logo_right" style="float:right;">
					<div id="searchTop">
						<div id="top_search_box">
							
<form id="searchform" action="<?php echo $vars['url']; ?>pg/search/" method="get">
	<input type="text" size="21" name="tag" value="Search" onfocus="if(this.value=='Search Community') this.value='';" onblur="if(this.value=='') this.value='Search Community';" class="search_input" />
	
<input type="submit" value="Go" class="search_submit_button" />
</form>
						</div>
					</div>

				</div>
</div>
	</div><!-- /#wrapper_header -->
</div><!-- /#layout_header -->


<div id="navBar">
	    <div id="navWrap" style="padding-right:10px;">
        		     <ul id="nav">

	         <li><a href="<?php echo $vars['url']; ?>">Home</a></li>
                           
	         
	         </ul>

	<?php

	/**
	 * Elgg standard tools drop down
	 * This will be populated depending on the plugins active - only plugin navigation will appear here
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @author Curverider Ltd
	 * 
	 */
	 
		$menu = get_register('menu');
		
		//var_export($menu);

		if (is_array($menu) && sizeof($menu) > 0) {
			$alphamenu = array();
			foreach($menu as $item) {
				$alphamenu[$item->name] = $item;
			}
			ksort($alphamenu);
		
?>

<ul id="nav">
     
      </ul>


<?php
		}
?>


	
	         <div id="nav_right" style="float:right;">
			     <ul id="nav">
					<li><a href="<?php echo $vars['url']; ?>account/register.php">Sign Up</a></li>		         </ul>


	    
	         </div>
	         </div><!-- /#navwrap -->

	</div><!-- /#navBar -->

<div id="page_container">
<div id="page_wrapper">

<?php

    }
?>
