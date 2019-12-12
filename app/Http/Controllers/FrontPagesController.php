<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\UsersModel;
use App\Pages;
use App\Themes;
use Widget;
//use App\modules;
use DB;

class FrontPagesController extends Controller
{
    public function home()
	{
		$mypageurl = "home";
		return $this->generatepage($mypageurl);		
	}

	public function index(string $pageSlug)
	{
		return $this->generatepage($pageSlug);
	}

	public function generatepage($mypageurl,$mycontent=NULL)
	{
		 
		$page = Pages::where("url",$mypageurl)->first();
		if(!$page)
		{
			abort(404);
		}
		$mypage = $page->toArray();
		$theme = Themes::findorfail($page->fkThemeId);
		$mytheme = $theme->toArray();

		$info = DB::table('information')->where('Id', '1')->first();

		//echo $info->Phone_num;
		
		
		$mytheme['social'] = '<title>TechCefaCos</title><!-- You can use open graph tags to customize link previews.Learn more: https://developers.facebook.com/docs/sharing/webmasters --><meta property="og:url" content="https://www.radio.gov.pk/" /><meta property="og:type" content="website" /><meta property="og:title" content="Radio Pakistan" /><meta property="og:description"   content="Radio Pakistan" /><meta property="og:image" content="http://www.radio.gov.pk/images/logo_social.png" />';
		
		
		$mytheme['content'] = str_replace("{HEADER}",View('layouts.defaultheader', compact('info')),$mytheme['content']);
		
		
		
		$mytheme['content'] = str_replace("{NAVIGATION}",View('layouts.defaultnav'),$mytheme['content']);
		//$mytheme['content'] = str_replace("{FOOTER}",View('layouts.defaultfooter'),$mytheme['content']);
		$mytheme['content'] = str_replace("{FOOTER}",View('layouts.defaultfooterbar', compact('info')),$mytheme['content']);		
		$mytheme['content'] = str_replace("{CONTENT}",$mypage['contents'],$mytheme['content']);
		$mytheme['content'] = str_replace("{SLIDER}",View('layouts.slider'),$mytheme['content']);
		$mytheme['content'] = str_replace("{OUR-CAUSES}",View('layouts.startourcauses'),$mytheme['content']);
		$mytheme['content'] = str_replace("{HELP-US}",View('layouts.helpus'),$mytheme['content']);
		$mytheme['content'] = str_replace("{OUR-GALLARY}",View('layouts.ourgallary'),$mytheme['content']);
		$mytheme['content'] = str_replace("{COUNT-AREA}",View('layouts.countdownarea'),$mytheme['content']);
		$mytheme['content'] = str_replace("{OUR-VOLUNTEER}",View('layouts.ourvolunteer'),$mytheme['content']);
		$mytheme['content'] = str_replace("{PEOPLE-SAYS}",View('layouts.peoplesaysarea'),$mytheme['content']);
		$mytheme['content'] = str_replace("{BLOG-AREA}",View('layouts.blogarea'),$mytheme['content']);
		$mytheme['content'] = str_replace("{BRAND-LOGO}",View('layouts.brandlogoarea'),$mytheme['content']);
		/*$mytheme['content'] = str_replace("{NEWSTOP}", Widget::run('topNews'),$mytheme['content']);
		$mytheme['content'] = str_replace("{NATIONAL}", Widget::run('national'),$mytheme['content']);
		$mytheme['content'] = str_replace("{GALLERY}", Widget::run('newsgallery'),$mytheme['content']);
		$mytheme['content'] = str_replace("{LIVEVIDEO}", Widget::run('livevideo'),$mytheme['content']);*/

		
		
		/*$matchespamodulelist = array();
		preg_match_all('/PAMODULELIST-(?P<digit>\d+)/',$mytheme['content'],$matchespamodulelist);
		for($i=0;$i<count($matchespamodulelist['digit']);$i++)
		{
			$mytheme['content'] = str_replace("{PAMODULELIST-".$matchespamodulelist['digit'][$i]."}", Widget::run('programmeslist',['count' => 7,'modid'=>$matchespamodulelist['digit'][$i]]),$mytheme['content']);
		}*/
		
		//$mytheme['content'] = str_replace("{BANNER}", Widget::run('banner'),$mytheme['content']);
		//$mytheme['content'] = str_replace("{WEATHER}", Widget::run('weather'),$mytheme['content']);
		
		
		
		
		
		
		
		return view('frontpages.index',compact('mytheme'));
	}
	
	
	
	
	
}
