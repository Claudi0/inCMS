<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d'
| http://www.meth0d.org
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/
//define('Xukys', true);
class HomesManager
{
	public static function HomeExists($linkType = 'user', $linkId)
	{
		return ((mysql_num_rows(dbquery("SELECT null FROM homes WHERE link_type = '" . strtolower($linkType) . "' AND link_id = '" . intval($linkId) . "' LIMIT 1")) > 0) ? true : false);
	}
	
	public static function GetHomeId($linkType, $linkId)
	{
		if (!HomesManager::HomeExists($linkType, $linkId))
		{
			return 0;
		}
		
		return intval(mysql_result(dbquery("SELECT home_id FROM homes WHERE link_type = '" . strtolower($linkType) . "' AND link_id = '" . intval($linkId) . "' LIMIT 1"), 0));
	}
	
	public static function CreateHome($linkType, $linkId)
	{
		dbquery("INSERT INTO homes (home_id,link_type,link_id,allow_display) VALUES ($linkId,'" . strtolower($linkType) . "','" . intval($linkId) . "','1')");
		
		$homeId = HomesManager::GetHomeId($linkType, $linkId);
		$home = HomesManager::GetHome($homeId);
		
		$home->AddItem('widget', 463, 39, 1, 'ProfileWidget', 'w_skin_defaultskin', $linkId);
		$home->AddItem('stickie', 42, 48, 2, 'Hola, y bienvenido a tu página de inicio. Para empezar, haz click en Editar. Allí encontrarás tu inventario y el catálogo. El inventario enumera todos los elementos que se pueden colocar en tu página incluyendo pegatinas, fondos y widgets. El catálogo es donde puedes comprar nuevos artículos. Comprueba de forma regular para encontrar elementos nuevos.', 'n_skin_noteitskin', $linkId);
		$home->AddItem('sticker', 593, 11, 4, 's_sticker_arrow_down', '', $linkId);
		$home->AddItem('sticker', 252, 12, 5, 's_paper_clip_1', '', $linkId);
		$home->AddItem('sticker', 341, 353, 6, 's_sticker_spaceduck', '', $linkId);
		$home->AddItem('sticker', 27, 32, 7, 's_needle_3', '', $linkId);
		
		return $homeId;
	}
	
	public static function GetHomeDataRow($id)
	{
		return mysql_fetch_assoc(dbquery("SELECT * FROM homes WHERE home_id = '" . $id . "' LIMIT 1"));
	}
	
	public static function GetHome($id)
	{
		$data = HomesManager::GetHomeDataRow($id);
		
		if ($data == null)
		{
			return null;
		}
		
		return new Home($data['home_id'], $data['link_type'], $data['link_id']);
	}
}

class Home
{
	public $id = 0;
	public $linkType = '';
	public $linkId = 0;
	
	public function Home($id, $linkType, $linkId)
	{
		$this->id = $id;
		$this->linkType = $linkType;
		$this->linkId = $linkId;
	}
	
	public function AddItem($type, $x, $y, $z, $data, $skin, $ownerId)
	{
		dbquery("INSERT INTO homes_items (home_id,type,x,y,z,data,skin,owner_id) VALUES ('" . $this->id .  "','" . $type . "','" . $x . "','" . $y . "','" . $z . "','" . filter($data) . "','" . $skin . "','" . $ownerId . "')");
	}
	
	public function GetItems($id = false)
	{
		
		if($id == false)
		{
			$list = Array();
			$get = dbquery("SELECT * FROM homes_items WHERE home_id = '" . $this->id . "' ORDER BY type ASC");
	
			while ($item = mysql_fetch_assoc($get))
			{
				$list[] = new HomeItem($item['id'], $item['home_id'], $item['type'], $item['data'], $item['skin'], $item['x'], $item['y'], $item['z'], $item['owner_id']);
			}
		}
		else
		{
			$get = dbquery("SELECT * FROM homes_items WHERE id = '".$id."' LIMIT 1");
	
				$item = mysql_fetch_assoc($get);
			
				$list = new HomeItem($item['id'], $item['home_id'], $item['type'], $item['data'], $item['skin'], $item['x'], $item['y'], $item['z'], $item['owner_id']);
				
			
		}
		

		
		return $list;
	}

	
}

class HomeItem
{
	public $id = 0;
	public $homeId = 0;
	
	public $type = '';
	public $data = '';
	public $skin = '';
	
	public $x = 0;
	public $y = 0;
	public $z = 0;
	
	public $ownerId = 0;
	
	public function HomeItem($id, $homeId, $type, $data, $skin, $x, $y, $z, $ownerId)
	{
		$this->id = $id;
		$this->homeId = $homeId;
		$this->type = $type;
		$this->data = $data;
		$this->skin = $skin;
		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
		$this->ownerId = $ownerId;
	}
	
	public function GetHome()
	{
		return HomesManager::GetHome($this->homeId);
	}

	public function UpdateItem($skinId, $stickieId)
	{
		switch($skinId)
		{
			case 1:
				$skin = 'defaultskin';
				break;
			case 2:
				$skin = 'speechbubbleskin';
				break;
			case 3:
				$skin = 'metalskin';
				break;
			case 4:
				$skin = 'noteitskin';
				break;
			case 5:
				$skin = 'notepadskin';
				break;
			case 6:
				$skin = 'goldenskin';
				break;
			case 7:
				$skin = 'hc_machineskin';
				break;
			case 8:
				$skin = 'hc_pillowskin';
				break;
			default:
				$skin = '';
				break;
		}
		
			dbquery("UPDATE homes_items SET skin = '".$skinId."' WHERE id = '".$stickieId."'");
			
				$sql = dbquery("SELECT * from homes_items WHERE id = '".$stickieId."'");
				$item = mysql_fetch_array($sql);
				$list = new HomeItem($item['id'], $item['home_id'], $item['type'], $item['data'], $item['skin'], $item['x'], $item['y'], $item['z'], $item['owner_id']);	
				
				return $list->GetHtml();
							
			
			
//			return $return;
	}
	
	public function GetHtml()
	{
		switch ($this->type)
		{
			case 'widget':
			
				$widget = null;
			
				switch (strtolower($this->data))
				{
					case 'profilewidget':
						$widget = new Template('widget-profile');
						$widget->SetParam('user_id', $this->GetHome()->linkId);
						break;
					case 'guestbookwidget':
						$widget = new Template('widget-GuestbookWidget');
						$widget->SetParam('user_id', $this->GetHome()->linkId);
						break;
					case 'badgeswidget':
						$widget = new Template('widget-BadgesWidget');
						$widget->SetParam('user_id', $this->GetHome()->linkId);
						break;
					default:
						$widget = new Template('widget-Workingonit');
						$widget->SetParam('user_id', $this->GetHome()->linkId);
					break;
				}
				
				$widget->SetParam('id', $this->id);
				$widget->SetParam('pos-x', $this->x);
				$widget->SetParam('pos-y', $this->y);
				$widget->SetParam('pos-z', $this->z);
				$widget->SetParam('skin', $this->skin);
			
				return $widget->GetHtml();
		
			case 'stickie':
				$editimg = '';
				if(isset($_SESSION['startSessionEditHome'])) { if($_SESSION['startSessionEditHome'] == $this->ownerId) { $editimg = '<img src="'.WWW.'/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="'.$this->type.'-'.$this->id.'-edit">
<script type="text/javascript">
var editButtonCallback = function(e) { openEditMenu(e, '.$this->id.', "'.$this->type.'", "'.$this->type.'-'.$this->id.'-edit"); };
Event.observe("'.$this->type.'-'.$this->id.'-edit", "click", editButtonCallback);
Event.observe("'.$this->type.'-'.$this->id.'-edit", "editButton:click", editButtonCallback); 
</script>'; } }

				return '<div class="movable stickie ' . $this->skin . '-c" style="left: ' . $this->x . 'px; top: ' . $this->y . 'px; z-index: ' . $this->z . ';" id="stickie-' . $this->id . '"><div class="' . $this->skin . '" ><div class="stickie-header"><h3>'.$editimg.'</h3><div class="clear"></div></div><div class="stickie-body"><div class="stickie-content"><div class="stickie-markup">' . fixText(BBcode($this->data), false, false, true, false, true) . '</div><div class="stickie-footer"></div></div></div></div></div>';
		
			case 'sticker':
				$editimg = '';
				if(isset($_SESSION['startSessionEditHome'])) { if($_SESSION['startSessionEditHome'] == $this->ownerId) { $editimg = '<img src="/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="sticker-'.$this->id.'-edit"><script type="text/javascript">var editButtonCallback = function(e) { openEditMenu(e, '.$this->id.', "sticker", "sticker-'.$this->id.'-edit"); };Event.observe("sticker-'.$this->id.'-edit", "click", editButtonCallback);Event.observe("sticker-'.$this->id.'-edit", "editButton:click", editButtonCallback); </script>'; } }
				return '<div class="movable sticker ' . clean($this->data) . '" style="left: ' . $this->x . 'px; top: ' . $this->y . 'px; z-index: ' . $this->z . ';" id="sticker-' . $this->id . '">'.$editimg.'</div>';
		}
	}
}

?>