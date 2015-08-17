// 1. OPBOUW VAN HET MENU-UITZICHT:

	var NoOffFirstLineMenus=6;			// aantal hoofditems
	
	var LowBgColor='#ECE9D8';			// achtergrondkleur hoofditems
	var HighBgColor='#CC6633';			// achtergrondkleur hoofditems bij muisover
	var FontLowColor='#800000';			// tekstkleur hoofditems
	var FontHighColor='#FFFFFF';		    // tekstkleur hoofditems bij muisover
	
	var LowSubBgColor='#ECE9D8';			// achtergrondkleur subitems
	var HighSubBgColor='#CC6633';		// achtergrondkleur subitems bij muisover
	var FontSubLowColor='#800000';		// tekstkleur subitems
	var FontSubHighColor='#FFFFFF';		// tekstkleur subitems bij muisover 
	
	var BorderColor='#800000';			// randkleur hoofitems
	var BorderSubColor='#800000';		// randkleur voor subitems
	var BorderWidth=1;					// randdikte
	var BorderBtwnElmnts=0;				// rand=1, geen rand=0
	
	var FontFamily="verdana,arial,times"// lettertype
	var FontSize=8;						// lettergrootte
	var FontBold=1;						// vet=1, normaal=0
	var FontItalic=0;					// schuin=1, normaal=0
	
	var MenuTextCentered='left';		// tekst positie: left, center of right
	
	var FirstLineHorizontal=1;			// horizontaal menu=1, verticaal menu=0
	var MenuCentered='center';			// menubalk horizontale positie: left, center of right
	var MenuVerticalCentered='top';		// menubalk verticale positie: top,middle,bottom,static
	
	var ChildOverlap=.2;				// horizontale overlapping child/ parent
	var ChildVerticalOverlap=.2;		// verticale overlapping child/ parent
	
	var StartTop=86;					// menu beginpositie x
	var StartLeft=0;					// menu beginpositie y
	
	var VerCorrect=0;					// multiple frames y correctie
	var HorCorrect=0;					// multiple frames x correctie
	
	var LeftPaddng=3;					// padding links
	var TopPaddng=2;					// padding boven
	
	var DissapearDelay=1000;			// vertraging vooraleer submenu verdwijnt
	
	var MenuFramesVertical=1;			// frames in kolommen of rijen: 1 of 0
	
	var TakeOverBgColor=1;				// menu frame neemt achtergrondkleur subitem frame over
	var FirstLineFrame='_top ';			// framenaam invullen waar hoofditems verschijnen
	var SecLineFrame='_top ';			// framenaam invullen waar subitems verschijnen
	var DocTargetFrame='_top ';			// framenaam invullen waar target documenten verschijnen
	var TargetLoc='';					// span id voor relatief positioneren
	var HideTop=0;						// verberg hoofditems bij laden nieuw document: 1 of 0
	var MenuWrap=0;						// menu wrap aan=1, menu wrap uit=0
	var RightToLeft=0;					// van rechts naar links uitvouwen: 1(indien niet:0)
	var UnfoldsOnClick=0;				// uitvouwen bij muisover=0, bij klikken=1
	var WebMasterCheck=1;				// menu check aan=1, uit=0
	var ShowArrow=1;					// gebruikt pijltjes indien 1
	var KeepHilite=1;					// houd gekozen pad highlighted
	var Arrws=['tri.gif',5,10,'tridown.gif',10,5,'trileft.gif',5,10];//Pijltjes:source,width, height

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// 2. OPBOUW VAN DE MENU-INHOUD:

//	MenuX=new Array(tekst,link,achtergrondbeeld(=optioneel),aantal subelementen,hoogte,breedte);
//	Voor rolloverbeeldjes, zet i.p.v. tekst: "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("rollover:Button1a.jpg:Button1b.jpg","Index.html","",0,20,120);
	
Menu2=new Array("rollover:Button2a.jpg:Button2b.jpg","","",10);
	Menu2_1=new Array("Bezoeker Welkom","welkom.htm","",0,20,120);
	Menu2_2=new Array("Deelnemers/ww","emailhomepageleden.asp","",0);
	Menu2_3=new Array("E-mailArchief/ww","http://list.seniorweb.nl/archives/genealogie.html","",0);
	Menu2_4=new Array("*E-mail regelen","http://mailgroep.seniorweb.nl/gen/E-mail-Regelen.htm","",0);	
	Menu2_5=new Array("*Mijn SeniorWeb","http://www.seniorweb.nl/mijnseniorweb/","",0);	
	Menu2_6=new Array("Homepages leden","homepageleden.htm","",0);
	Menu2_7=new Array("HOSTS","TakenHost.htm","",0);
	Menu2_8=new Array("Huisregels","huisregels.htm","",0);	
	Menu2_9=new Array("Wie is Wie?/ww","http://www.groeneweg.org/koppies/","",0);
	Menu2_10=new Array("ZOEK-vragen","Zoekvragen.htm","",0);
			
Menu3=new Array("rollover:Button3a.jpg:Button3b.jpg","","",10);
	Menu3_1=new Array("Archief+bezoeker","archievenenbezoekers.htm","",0,20,120);
	Menu3_2=new Array("Familienamen-1","Start2.htm","",0);
	Menu3_3=new Array("Familienamen-2","LinkenTwee.htm","",0);
	Menu3_4=new Array("Bron-1 Plaatsnm","BronnenPlaatsnaam.htm","",0);
	Menu3_5=new Array("Bron-2 Alfabet ","Bronnenpartbezit.htm","",0);
	Menu3_6=new Array("Bron-3 Advd.Kaa","BronnenAdvdKaa.htm","",0);
	Menu3_7=new Array("B-4WimHollander","wimhollander.htm","",0);
	Menu3_8=new Array("DNA+Genealogie","DNA-2.htm","",0);
	Menu3_9=new Array("Beginners+Tips","","",6);
		Menu3_9_1=new Array("Handleiding","http://regionaalarchief.tilburg.nl/index.php?option=com_content&task=view&id=42&Itemid=60","",0,20,120);
		Menu3_9_2=new Array("Genealogie-CBG","http://194.171.109.12/page/475/onderzoek","",0);
		Menu3_9_3=new Array("NGV-Tips","http://www.ngv.nl/common/sitemap.htm","",0);
		Menu3_9_4=new Array("NGV-Contactdnst","http://www.contactdienst.nl/","",0);
		Menu3_9_5=new Array("Geneal.Bronnen","http://home.hccnet.nl/p.molema/bronnen.htm","",0);
		Menu3_9_6=new Array("Wat is een..","http://home.hccnet.nl/p.molema/delfland.htm","",0);
	Menu3_10=new Array("Adressen Spec.","Adressen.htm","",0);	

Menu4=new Array("rollover:Button4a.jpg:Button4b.jpg","","",6);
	Menu4_1=new Array("1 Groepslinken","hoofdpagsenweb.html","",0,20,120);
	Menu4_2=new Array("2 Genealogie!","linkenpag.htm","",0);
	Menu4_3=new Array("3 Prov.Archieven","Provincies.htm","",0);
	Menu4_4=new Array("4 Europa+Wereld","Landen.htm","",0);
	Menu4_5=new Array("5 Archief+Afkort","http://hennekam.archieven.org/?page=afkortingen.php","",0);
	Menu4_6=new Array("6 Archievengroep","#","",4);
		Menu4_6_1=new Array("Cluster-zoeken","http://www.zoeken.nl/","",0,20,120);	
		Menu4_6_2=new Array("Digit.-Geheugen","http://www.archieven.nl/pls/m/zk2.html_hm","",0,20,120);	
		Menu4_6_3=new Array("Thematis-portal","http://81.18.161.80/fm_tnet_publiek/Zoeken.aspx","",0);
		Menu4_6_4=new Array("GOOGLE-Alert!","http://www.googlealert.com/","",0);	

Menu5=new Array("rollover:Button5a.jpg:Button5b.jpg","","",7);
	Menu5_1=new Array("BID-prentjes","bidprentjes","",0,20,120);
	Menu5_2=new Array("Handleidingen","ZoekenInternet.htm","",0);
	Menu5_3=new Array("Informatie","","",6,20,120);
		Menu5_3_1=new Array("Basis Info","Basisinfo.htm","",0,20,120);
		Menu5_3_2=new Array("Kwartierstaat","Kwartierstaat.htm","",0);
		Menu5_3_3=new Array("StamboomOnderz","Genealogie2.htm","",0);
		Menu5_3_4=new Array("Hoe nu verder","Hoenuverder.htm","",0);
		Menu5_3_5=new Array("Schout&Schepen","Schout.htm","",0);
		Menu5_3_6=new Array("Tijdrekening","Tijdrekening.htm","",0);
	Menu5_4=new Array("Geld & Meer","","",5,20,120);
		Menu5_4_1=new Array("Geld en Waarden","Geld.htm","",0,20,120);
		Menu5_4_2=new Array("Hygi&euml;ne","Epidemie.htm","",0);
		Menu5_4_3=new Array("Vervoer","Vervoer.htm","",0);
		Menu5_4_4=new Array("Vondeling A'dam","Vondeling.htm","",0);
		Menu5_4_5=new Array("Welgeboren","Welgeborenen.htm","",0);
	Menu5_5=new Array("Genealogie & ?","","",5,20,120);
		Menu5_5_1=new Array("Gezegden-1","Gezegden.htm","",0,20,120);
		Menu5_5_2=new Array("Gezegden-2","Gezegden-2.htm","",0);
		Menu5_5_3=new Array("Wet Pers.Reg.","Wetpersreg.htm","",0);
		Menu5_5_4=new Array("Zeelui/Oosten","Zeelui.htm","",0);
		Menu5_5_5=new Array("Boek schrijven","Familieboek.htm","",0);
	Menu5_6=new Array("Webwerkplaats","werkplaats/","",0,20,120);
	Menu5_7=new Array("Eigen progr's","HenkvLienen.htm","",0,20,120);
	
Menu6=new Array("rollover:Button6a.jpg:Button6b.jpg","","",6);
	Menu6_1=new Array("SNEL-zoeken","http://www.stamboomsurfpagina.nl/genzoek.html","",0,20,120);
	Menu6_2=new Array("Genea-Werkbalk","http://www.genealogiewerkbalk.nl/?gw=cs","",0);
	Menu6_3=new Array("Genealogie-NL","http://genealogie.rubrieken.com/","",0);
	Menu6_4=new Array("Emigratie-VS+","http://groups.msn.com/Genpals2003/jouwwebpagina.msnw","",0);
	Menu6_5=new Array("Laatste Nieuws","LaatsteNieuws.htm","",0);
	Menu6_6=new Array("Seniorweb","","",9);
		Menu6_6_1=new Array("SeniorWeb.nl","http://www.seniorweb.nl/","",0,20,120);
		Menu6_6_2=new Array("Cursus SenWeb","http://www.seniorweb.nl/computer/cursus_internet.aspx?menuid=68","",0);	
		Menu6_6_3=new Array("Computerbrevet","http://www.seniorweb.nl/computer/computerbrevet.aspx","",0);
		Menu6_6_4=new Array("Voordeel SenWeb","http://www.seniorweb.nl/oversw/content.aspx?id=686&menuid=78","",0);
		Menu6_6_5=new Array("LID SeniorWeb","http://www.seniorweb.nl/oversw/content.aspx?id=192&menuid=78","",0);
		Menu6_6_6=new Array("LID Gen.groep","http://www.seniorweb.nl/webcontact/mailgroepen.aspx?toon=aanmelden&id=16&menuid=148","",0);
		Menu6_6_7=new Array("SW &-Software","http://www.seniorweb.nl/computer/software.aspx","",0);
		Menu6_6_8=new Array("SW &-PC-Hulp","http://www.seniorweb.nl/computer/pchulp/index.aspx?menuid=48","",0);
		Menu6_6_9=new Array("SW &-Veiligheid","http://www.seniorweb.nl/computer/software.aspx?cat=116","",0);