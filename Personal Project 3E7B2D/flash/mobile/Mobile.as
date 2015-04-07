package mobile{
	
	import flash.display.Loader;
	import flash.display.MovieClip;
	import flash.display.Sprite;
	import flash.events.Event;
	import flash.events.MouseEvent;
	import flash.net.URLRequest;
	import flash.net.navigateToURL;
	import flash.display.StageScaleMode;
	import flash.display.StageAlign;
	import caurina.transitions.Tweener;
	
	public class Mobile extends MovieClip{
		
		private var bg:Background;
		private var logo:Logo;
		private var mixerGallery:MovieClip;
		private var menu:MovieClip;
		private var section:MovieClip;
		private var sectionLoader:Loader;
		private var addSection:Boolean = false;
		
		public function Mobile(){
			trace ("hi from the best project ever!");
			
			stage.scaleMode = StageScaleMode.NO_SCALE;
			stage.align = StageAlign.TOP_LEFT;
			stage.addEventListener(Event.RESIZE, stageResized);
			
			// BACKGROUND
			bg = new Background();
			centerToStage(bg);
			addChild(bg);
			
			//LOGO
			logo = new Logo();
			centerToStage(logo, true, false);
			logo.y = 30;
			addChild(logo);
			
			
			//MENU
			menu = new MovieClip();
			
			var about:AboutSection = new AboutSection();
			menu.addChild(about);
			about.addEventListener(MouseEvent.CLICK, goTo);
			about.buttonMode = true;
			
			var instructions:InstructionsSection = new InstructionsSection();
			instructions.x = about.width;
			menu.addChild(instructions);
			instructions.addEventListener(MouseEvent.CLICK, goTo);
			instructions.buttonMode = true;
			
			var patch:PatchSection = new PatchSection();
			patch.x = about.width + instructions.width;
			menu.addChild(patch);
			patch.addEventListener(MouseEvent.CLICK, goTo);
			patch.buttonMode = true;
			
			var mix:MixSection = new MixSection();
			mix.x = about.width + instructions.width + patch.width;
			menu.addChild(mix);
			mix.addEventListener(MouseEvent.CLICK, goTo);
			mix.buttonMode = true;
			
			var blog:BlogSection = new BlogSection();
			blog.x = about.width + instructions.width + patch.width + mix.width;
			menu.addChild(blog);
			blog.addEventListener(MouseEvent.CLICK, goTo);
			blog.buttonMode = true;
			
			var login:LogInSection = new LogInSection();
			login.x = about.width + instructions.width + patch.width + mix.width + blog.width;
			menu.addChild(login);
			login.addEventListener(MouseEvent.CLICK, goTo);
			login.buttonMode = true;
			
			centerToStage(menu, true, false);
			menu.y = logo.y + logo.height + 15;
			addChild(menu);
		
			// FAKE MIXES GALLERY
			mixerGallery = new MovieClip();
			
			var left:ArrowLeft = new ArrowLeft();
			mixerGallery.addChild(left);
			left.buttonMode=true;
			
			var fake:FakeGallery = new FakeGallery();
			fake.x = left.width;
			mixerGallery.addChild(fake);
			
			var right:ArrowRight = new ArrowRight();
			right.x = left.width + fake.width;
			mixerGallery.addChild(right);
			right.buttonMode=true;
			
			centerToStage(mixerGallery, true, false);
			mixerGallery.y = stage.stageHeight - mixerGallery.height - 50;
			if (stage.stageHeight < 625) {
				mixerGallery.alpha = 0;
			}
			addChild(mixerGallery);
			
			
		}
		
		private function goTo(e:Event):void{
			if(section != null)
			{
				removeChild(section);
				section = null;
			}
			
			var txt:MovieClip;
			section = new MovieClip();
			
			section = new MovieClip();
			if (e.target is AboutSection) {
				txt = new AboutText();
				addSection = true;
			}
			
			if (e.target is InstructionsSection) {
				txt = new InstructionsText();
				addSection = true;
			}
			
			if (e.target is PatchSection) {
				trace("Bring on the patches");
				addSection = false;
				sectionLoader = new Loader();
				sectionLoader.contentLoaderInfo.addEventListener(Event.COMPLETE, patchesReady);
				sectionLoader.load(new URLRequest("PatchesLoader.swf"));
			}
			
			if (e.target is MixSection) {
				trace("Mix away!");
				addSection = true;
			}
			
			if (e.target is BlogSection) {
				addSection = false;
				addChild(section);
				var url:URLRequest = new URLRequest("http://imm-pm2.tumblr.com");
				navigateToURL(url,"_self");
			}
			
			if (e.target is LogInSection) {
				trace("user log in");
				addSection = true;
			}
			
			if (txt != null) {
				txt.alpha = 0;
				section.addChild(txt);
				var yPos:Number = (stage.stageHeight - section.height) / 2;
				if (yPos > (logo.height + menu.height + 30)) {
					centerToStage(section);
				} else {
					section.y = logo.height + menu.height + 30;
					centerToStage(section, true, false);
				}
			}
			if(addSection){
				addChild(section);
				Tweener.addTween(txt, { alpha:1, time:1, delay:0.3, transition: "easeOut" } );
			}
		}
		
		private function patchesReady(e:Event):void {
			trace("patchesReady");
			
			section = new MovieClip();
			//section.alpha = 0;
			section.addChild(sectionLoader.content);
			var yPos:Number = (stage.stageHeight - section.height) / 2;
			if (yPos > (logo.height + menu.height + 30)) {
				centerToStage(section);
			} else {
				section.y = logo.height + menu.height + 30;
				centerToStage(section, true, false);
			}
			addChild(section);
			//Tweener.addTween(section, {alpha:1, time:1, delay:0.3, transition: "easeOut"});
		}
		
		private function stageResized(e:Event):void {
			trace("stage size: " + stage.stageWidth + " by " + stage.stageHeight);
			
			centerToStage(bg);
			centerToStage(logo, true, false);
			centerToStage(menu, true, false);
			centerToStage(mixerGallery, true, false);
			mixerGallery.y = stage.stageHeight - mixerGallery.height - 50;
			
			if (stage.stageHeight < 700) {
				mixerGallery.alpha = 0;
			} else {
				mixerGallery.alpha = 1;
			}
			
			if (section != null)
			{
				var yPos:Number = (stage.stageHeight - section.height) / 2;
				if (yPos > (logo.height + menu.height + 30)) {
					centerToStage(section);
				} else {
					section.y = logo.height + menu.height + 30;
					centerToStage(section, true, false);
				}
			}
		}
		
		private function centerToStage(s:Sprite, centerX:Boolean = true, centerY:Boolean = true):void{
			if(centerX){
				s.x = (stage.stageWidth - s.width) / 2;
			}
			if(centerY){
				s.y = (stage.stageHeight - s.height) / 2;
			}
		}
		
	}//ends class
	
	
}//ends package