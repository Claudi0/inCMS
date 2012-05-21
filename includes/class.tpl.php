<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d' and updates by Matthew 'MDK'
| http://www.meth0d.org & http://www.sulake.biz
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

class uberTpl
{
	private $outputData;
	private $params = Array();
	private $includeFiles = Array();
	
	public function Init()
	{
		global $core, $users;
	
		$this->SetParam('', 'Holo');
		$this->SetParam('body_id', '');
		$this->SetParam('page_title', ' ');
		$this->SetParam('flash_build', 'flash_63_9');
		$this->SetParam('web_build', '63_1dc60c6d6ea6e089c6893ab4e0541ee0/1028');
		$this->SetParam('web_build_str', 'LxCMS v2 Por MoNiKoS.');
		$this->SetParam('req_path', WWW);
		$this->SetParam('www', WWW);
		$this->SetParam('hotel_status_fig', uberCore::GetSystemStatusString(true));
		$this->SetParam('hotel_status', uberCore::GetSystemStatusString(false));
		
		if (LOGGED_IN)
		{
			$this->SetParam('habboLoggedIn', 'true');
			$this->SetParam('habboName', USER_NAME);
			$this->SetParam('vipbalance', '<b>' . $users->GetUserVar(USER_ID, 'vip_points') . ' <img src="' . WWW . '/images/vipcoin.gif" style="vertical-align: middle;"></b>');
		}
		else
		{
			$this->SetParam('habboLoggedIn', 'false');
			$this->SetParam('habboName', 'null');
		}
	}
	
	public function AddIncludeSet($set)
	{
		switch (strtolower($set))
		{
			case "frontpage":
			
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs2.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/landing.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/frontpage.css', 'stylesheet'));			
				break;

			case "homes":

				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/static/styles/common.css', 'stylesheet'));						
				$this->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.xukys-hotel.com/web-gallery/static/js/libs2.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.xukys-hotel.com/web-gallery/static/js/visual.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.xukys-hotel.com/web-gallery/static/js/libs.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.xukys-hotel.com/web-gallery/static/js/common.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/fullcontent.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://images.xukys-hotel.com/web-gallery/static/styles/home.css', 'stylesheet'));			
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://images.xukys-hotel.com/cs/styles/assets/other.css?v=cd4283662f0b704a80227001a33203ac', 'stylesheet'));			
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://images.xukys-hotel.com/cs/styles/assets/backgrounds.css?v=cd3c3a223dfc37500c560a00c068fd95', 'stylesheet'));			
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://images.xukys-hotel.com/cs/styles/assets/stickers.css?v=5a9f5cbe379ca65e6417720f48df0510', 'stylesheet'));			
				$this->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.xukys-hotel.com/web-gallery/static/js/homeview.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://images.xukys-hotel.com/web-gallery/static/styles/lightwindow.css', 'stylesheet'));			
				$this->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.xukys-hotel.com/web-gallery/static/js/homeauth.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://images.xukys-hotel.com/web-gallery/static/styles/group.css', 'stylesheet'));			
				break;
				
			case "register":

				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs2.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/visual.js'));		
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs.js'));		
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/common.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/style.css', 'stylesheet'));		
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/buttons.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/boxes.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/tooltips.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/changepassword.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/forcedemaillogin.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/quickregister.css', 'stylesheet'));
				break;
		
			case "process-template":
			
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs2.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/visual.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/common.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/fullcontent.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/style.css', 'stylesheet'));		
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/buttons.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/boxes.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/tooltips.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/process.css', 'stylesheet'));	
				break;
				
			case 'myhabbo':
			
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs2.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/visual.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/common.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/fullcontent.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/style.css', 'stylesheet'));		
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/buttons.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/boxes.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/tooltips.css', 'stylesheet'));				
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/styles/myhabbo/myhabbo.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/styles/myhabbo/skins.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/styles/myhabbo/dialogs.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/styles/myhabbo/buttons.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/styles/myhabbo/control.textarea.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/styles/myhabbo/boxes.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/myhabbo.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/css', 'http://www.habbo.co.uk/myhabbo/styles/assets.css', 'stylesheet'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/homeview.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/lightwindow.css', 'stylesheet'));
				break;
			
			case 'default':
			default:
			
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs2.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/visual.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/libs.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/common.js'));
				$this->AddIncludeFile(new IncludeFile('text/javascript', '%www%/web-gallery/static/js/fullcontent.js'));
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/style.css', 'stylesheet'));		
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/buttons.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/boxes.css', 'stylesheet'));	
				$this->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/tooltips.css', 'stylesheet'));		
				break;
		}
	}
	
	public function AddGeneric($tplName)
	{
		$tpl = new Template($tplName);
		$this->outputData .= $tpl->GetHtml();
	}
	
	public function AddTemplate($tpl)
	{
		$this->outputData .= $tpl->GetHtml();
	}
	
	public function SetParam($param, $value)
	{
		$this->params[$param] = is_object($value) ? $value->fetch() : $value;
	}
	
	public function UnsetParam($param)
	{
		unset($this->params[$param]);
	}
	
	public function AddIncludeFile($incFile)
	{
		$this->includeFiles[] = $incFile;
	}
	
	public function WriteIncludeFiles()
	{
		foreach ($this->includeFiles as $f)
		{
			$this->Write($f->GetHtml() . LB);
		}
	}
	
	public function Write($str)
	{
		$this->outputData .= $str;
	}
	
	public function FilterParams($str)
	{
		foreach ($this->params as $param => $value)
		{
			$str = str_ireplace('%' . $param . '%', $value, $str);
		}
		
		return $str;
	}
	
	public function Output()
	{
		global $core;
	
		$this->Write(LB . LB . '<!-- uberCMS: Took ' . (microtime(true) - $core->execStart) . ' to output this page -->' . LB . LB);
		
		echo $this->FilterParams($this->outputData);
	}
}

class Template
{
	private $params = Array();
	private $tplName = '';
	
	public function Template($tplName)
	{
		$this->tplName = $tplName;
	}
	
	public function GetHtml()
	{
		global $users;
	
		extract($this->params);
	
		$file = CWD . 'nucleo/tpl/' . $this->tplName . '.tpl';
	
		if (!file_exists($file))
		{
			uberCore::SystemError('Error en el Sistema de Archivos de LxCMS.', 'No se ha podido cargar el siguiente TPL: <b>' . $this->tplName);
		}
		
		ob_start();
		include($file);
		$data = ob_get_contents();
		ob_end_clean();	
		
		return $this->FilterParams($data);
	}
	
	public function FilterParams($str)
	{
		foreach ($this->params as $param => $value)
		{
			if (is_object($value))
			{
				continue;
			}
		
			$str = str_ireplace('%' . $param . '%', $value, $str);
		}
		
		return $str;
	}
	
	public function SetParam($param, $value)
	{
		$this->params[$param] = $value;
	}
	
	public function UnsetParam($param)
	{
		unset($this->params[$param]);
	}		
}

class IncludeFile
{
	private $type;
	private $src;
	private $rel;
	private $name;

	public function IncludeFile($type, $src, $rel = '', $name = '')
	{
		global $tpl;
	
		$this->type = $type;
		$this->src = $src;
		$this->rel = $rel;
		$this->name = $name;
	}
	
	public function GetHtml()
	{
		switch ($this->type)
		{
			case 'application/rss+xml':
			
				return '<link rel="' . $this->rel . '" type="' . $this->type . '" title="' . $this->name . '" href="' . $this->src . '" />';
		
			case 'text/javascript':
			
				return '<script src="' . $this->src . '" type="text/javascript"></script>';
				
			case 'text/css':
			default:
			
				return '<link rel="' . $this->rel . '" href="' . $this->src . '" type="' . $this->type . '" />';
		}
	}
}

?>