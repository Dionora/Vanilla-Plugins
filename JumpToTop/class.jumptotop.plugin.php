<?php if(!defined('APPLICATION')) exit();
/* 	Copyright 2013 Zachary Doll
 * 	This program is free software: you can redistribute it and/or modify
 * 	it under the terms of the GNU General Public License as published by
 * 	the Free Software Foundation, either version 3 of the License, or
 * 	(at your option) any later version.
 *
 * 	This program is distributed in the hope that it will be useful,
 * 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 * 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * 	GNU General Public License for more details.
 *
 * 	You should have received a copy of the GNU General Public License
 * 	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
$PluginInfo['JumpToTop'] = array(
    'Name' => 'Jump To Top',
    'Description' => 'Provides a link to jump to the top of the page. Fades out when not needed.',
    'Version' => '1.3',
    'Author' => 'Zachary Doll',
    'AuthorEmail' => 'hgtonight@gmail.com',
    'AuthorUrl' => 'http://www.daklutz.com',
    'License' => 'GPLv3'
);

class JumpToTop extends Gdn_Plugin {

  // runs once every page load
  public function __construct() {
    parent::__construct();
  }

  //This is a common hook that fires for all controllers on the Render method
  public function Base_Render_Before($Sender) {
    
      // add the JS/CSS
      $Sender->AddJsFile('plugins/JumpToTop/jttop.js');
      $Sender->AddJsFile('plugins/JumpToTop/js/jquery-throttle.js');
      $Sender->AddJsFile('plugins/JumpToTop/js/jumptotop.js');
      $Sender->AddCSSFile('plugins/JumpToTop/design/jumptotop.css');
    
  }
  
}
