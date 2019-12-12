<?php

namespace App\Http\Middleware;

use Closure;
use App\Pages;


class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        \Menu::make('TopBar', function ($menu) {
            $allpages = Pages::where('pageLocation','Top')->where('parentPageId',0)->orderby('Rank','ASC')->get();
                foreach($allpages as $page){
                    //class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                    $subpages = Pages::where('pageLocation','Top')->where('parentPageId',$page->id)->orderby('Rank','ASC')->get();
                    if(count($subpages)>0)
                        $menu->add($page->title.' ',['url'=>'#','class'=>"dropdown"])->id($page->id)->link->attr('class',"dropdown-toggle")->attr('data-toggle',"dropdown")->attr('role','button')->attr('aria-haspopup','true','aria-expanded','false');
                    else
                        $menu->add($page->title,$page->url)->id($page->id);	
                    
                     foreach($subpages as $subpage){
                         $menu->add($subpage->title,['url'=>$subpage->url,'parent'=>$page->id]);
                     }
                }
            
            });
            // \Menu::make('FooterCats', function ($menu) {
            // $allmodules = modules::where('fkModuleTypeId',2)->take(4)->orderby('Rank','ASC')->get();
            //     foreach($allmodules as $module){
            //         $menu->add($module->moduleTitle,'http://'.$_SERVER['HTTP_HOST'].'/newslist/'.$module->id);
            //     }
            
            // });
            \Menu::make('FooterMenu', function ($menu) {
            $allpages = Pages::where('pageLocation','Footer')->where('parentPageId',0)->take(8)->orderby('Rank','ASC')->get();
                foreach($allpages as $page){
                    $menu->add($page->title,$page->url);
                }
            
            });
    
            
        
        return $next($request);
    }
}
