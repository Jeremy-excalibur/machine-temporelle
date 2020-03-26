<?php

require ('datas/datas.php');

// la fonction calculDeOuf permet de récupérer la donnée date de l'utilisateur
function calculDeOuf(){
    if (isset($_GET['input'])) {
        $date = $_GET['date'];
        return $date; 
    }}

// la fonction epoque permet de situer l'epoque en fonction de la date rentrée par l'utilisateur
    function epoque(){

        require ('datas/datas.php');
        if ($_GET['date'] <= 476){
            echo 'Le temps des romains, des gaulois ou encore des égyptiens... aucun doute nous avons attérri en pleine ' .  $epoque[0];
            ?><br>
            <img src="https://misterfanjo.com/wp-content/uploads/2017/05/antiquit%C3%A9.png" alt="photo antiquité">
            <?php
        }
    
        elseif(($_GET['date'] > 476) && ($_GET['date'] <= 1492)){
            echo 'Le temps des chevaliers et des châteaux fort, peut-être rencontreras tu ta Frénégonde ou ton Godefroy ! tu es au ' . $epoque[1];
            ?><br>
            <img src="https://img.bfmtv.com/c/1000/600/2df/b1d8ad0e2d10a88c396a454978ee5.jpg" alt="photo moyen age">
            <?php
        }
    
        elseif (($_GET['date'] > 1492) && ($_GET['date'] <= 1789 )){
            echo 'On est un peu avant la révolution, à l\'epoque de Versailles, de Leonard de Vinci ! Aucun doute nous sommes à la ' .$epoque[2];
            ?><br>
            <img src="https://i2.wp.com/l-express.ca/wp-content/uploads/2020/01/italy-rome-vatican-museums-painting-013119-e1565103079326jpg_large.jpeg?fit=585%2C391&ssl=1" alt="Photo renaissance">
            <?php
        }
    
        elseif (($_GET['date'] > 1789) && ($_GET['date'] <= 2020 )){
            echo 'On est quand meme vachement près de notre epoque... hum on est surement pendant les ' .$epoque[3];
            ?><br>
            <img src="https://www.premiere.fr/sites/default/files/styles/scale_crop_1280x720/public/2019-10/les%20temps%20modernes.jpg" alt="photos temps moderne">
            <?php
        }
    
        else {
            echo 'y\'a un petit souci la';
        }
    }

    function evenement(){
        if ($_GET['date'] == 481){
            echo '<h1> Clovis : Roi des Francs </h1>';
            ?><br>
            <img src="http://img.over-blog.com/389x600/2/43/14/66/clovis1.jpg" alt="photos de Clovis">
            <?php
            echo '<p>Après la chute de l\'Empire romain d\'occident en 476, la Gaule est aux mains des Francs, 
            peuple germanique ayant envahi le nord du pays. Clodion, Mérovée et Childéric se succèderont à la tête du royaume. Et en 481,
            Clovis, arrière-petit-fils de Clodion, monte sur le trône à l\'âge de quinze ans. Le domaine des Francs s\'élargit au sud au fil des siècles sous son impulsion : 
            la conquête se poursuit ainsi avec Reims, Soissons et Amiens en 486. Pour unifier le territoire, il se marie et se convertit au catholicisme. Remportant de nombreuses batailles, 
            Clovis a conquis des terres jusqu\'à la Loire en 490. A sa mort, en 511, le roi des Francs régnait sur le nord de la France, la Bretagne, 
            l\'Aquitaine et le Centre et avait fait de Paris sa capitale.</p>';
        }

        else if ($_GET['date'] == 732){
            echo '<h1> La bataille de Poitiers </h1>';
            ?><br>
            <img src="https://www.laculturegenerale.com/wp-content/uploads/2017/10/bataille-de-poitiers-tableau-mythe-732.png" alt="La bataille de Poitier">
            <?php
            echo '<p>Au pouvoir depuis 717, Charles Martel, doit affronter une nouvelle invasion en 720 : les Arabes ou Sarrasins  venus du sud de l\'actuelle France et d\'Espagne. 
            Après la prise du Languedoc et de Narbonne, ceux-ci s\'établissent à Toulouse en 721 et remontent inexorablement : Carcassonne, 
            puis Autun. Le 25 octobre 732, les troupes arabes se trouvent aux portes de Poitiers. Les soldats francs de Charles Martel, appelés en renfort par Eude, duc d\'Aquitaine, auraient
            écrasé l\'ennemi au cours d\'une rapide bataille. Le chef Abd el-Rahman aurait été tué par le souverain franc au cours de l\'affrontement. Certains historiens assurent que le chef 
            arabe aurait fui par les Pyrénées face à la supériorité du camp adverse.</p>';
        }

        else if ($_GET['date'] == 789){
            echo '<h1> Charlemagne impose la construction d\'écoles </h1>';
            ?><br>
            <img src="https://www.meisterdrucke.fr/kunstwerke/500px/Casper%20Johann%20Nepomuk%20Scheuren%20-%20Portrait%20of%20Charlemagne%20%28742%20-%20Aachen%20814%29%20King%20of%20Franks%20an%20-%20%28MeisterDrucke-306188%29.jpg" alt="Portrait de Charlemagne">
            <?php
            echo '<p>Charles Ier règne sur une partie du royaume des Francs de feu Pépin le Bref depuis le 24 septembre 768. A la mort de son frère Carloman en 771, 
            il constitue l\'unité du royaume et est couronné Empereur le 25 décembre 800. L\'homme, féru de batailles militaires, conquiert la Bourgogne, la Bretagne, 
            la Lombardie ou encore la Bavière. Mais contrairement à la légende populaire, Charles Ier ou Charlemagne, n\'a pas inventé l\'école qui existait déjà. Certes, 
            il a encouragé le mouvement appelé "renaissance carolingienne" en encourageant un renouveau culturel dans le royaume. Et en 789, Charlemagne rédige un capitulaire
            ordonnant au clergé d\'ouvrir des écoles pour tous. Il souhaite développer l\'apprentissage de la lecture, de l\'écriture et du calcul : c\'est la naissance de la future école gratuite 
            et obligatoire laïque.</p>';
        }

        else if ($_GET['date'] == 843){
            echo '<h1>Le partage de Verdun</h1>';
            ?><br>
            <img src="http://atc3.bentley.edu/courses/frenchjukebox/site1/images/partage_verdun.jpg" alt="Partage de Verdun">
            <?php
            echo '<p>Lorsqu\'il s\'éteint, le 28 janvier 814 au matin, l\'empereur Charlemagne a soixante-douze ans. L\'homme a régné près de quarante-six années sur le territoire des Francs. 
            Son fils, Louis Ier dit le Pieux, lui succède. Mais en voulant régler par avance sa succession, il déclenche l\'affrontement entre ses quatre fils. 
            En 829, il donne à son dernier fils plusieurs régions. Ses trois aînés, Pépin, Louis et Lothaire, furieux, s\'unissent puis se défient pour récupérer davantage de pouvoir. Le 24 juin 833 : 
            l\'armée du père s\'oppose à celle de ses fils. Le royaume est finalement divisé entre les fils. Cependant, les heurts reprennent à la mort de leur père le 28 juin 840.
            Et en août 843, le traité de Verdun scelle la naissance de la "France". Lothaire, Louis et Charles (Pépin est mort auparavant) règnent respectivement sur la Francia media,
            la Francia orientalis et la Francia occidentalis, l\'actuelle France.</p>';
        }

        else if ($_GET['date'] == 1095){
            echo '<h1>La première croisade</h1>';
            ?><br>
            <img src="https://www.famillechretienne.fr/var/fc/storage/images/media/images/articles/eglise-croisades/30811459-1-fre-FR/eglise-croisades_article_large.jpg" alt="Croisade">
            <?php
            echo '<p>L\'appel lancé par le pape Urbain II a eu de lourdes conséquences pendant près de trois siècles. Le 27 novembre 1095, le souverain pontife conclut un concile à Clermont, 
            en Auvergne et souhaite que les lieux saints soient libérés. En effet, depuis 1070, ils sont occupés par les Turcs et leur accès est désormais impossible aux pèlerins chrétiens.
            L\'invitation du pape, fortement relayée et encouragée, mobilise de nombreux volontaires à travers toute l\'Europe. La première croisade est lancée : elle se tiendra de 1096 à 1099.
            Les expéditions pour délivrer le tombeau du Christ ont été de véritables batailles sanglantes et souvent atroces. Huit croisades se sont déroulées jusqu\'en 1270 avec des châtiments corporels, 
            des victimes bouillies ou encore brûlées vives. La dernière sera fatale à Louis IX, Saint Louis, qui meurt à Tunis le 17 juillet 1270.</p>';
        }

        else if ($_GET['date'] == 1244){
            echo '<h1>La fin des Cathares</h1>';
            ?><br>
            <img src="https://www.detoursenfrance.fr/sites/art-de-vivre/files/styles/diaporama_slide_fullscreen/public/queribus6-dr-dep-aude.jpg?itok=6TkuvwFw" alt="Chateau Cathare">
            <?php
            echo '<p>Le Moyen-âge a été notamment l\'époque d\'affrontements religieux. En 1207, la croisade se fait également à l\'intérieur du royaume car Toulouse et le sud de la France sont devenues cathares
            et reconnaissent deux Dieux. Ce qui vaut toujours à cette mouvance d\'être cataloguée comme une secte religieuse. C\'est la célèbre croisade contre les Albigeois, où le catharisme est le plus installé.
            L\'Inquisition, mise en place par le Pape Grégoire IX en 1233, prévoit l\'usage de la violence et de la torture pour les infidèles. L\'apogée de cette lutte se tient à Montségur, 
            le 16 mars 1244. Des cathares qui refusent de se convertir au christianisme se sont réfugiés dans ce château fort des Pyrénées. Mais dénoncés, ils se rendent et sont brûlés. 
            La chute de Montségur marque la fin du catharisme.</p>';
        }

        else if ($_GET['date'] == 1337){
            echo '<h1>La guerre de Cent ans</h1>';
            ?><br>
            <img src="https://www.histoire-pour-tous.fr/images/articles/dossiers/battle_of_crecy_froissart.jpg" alt="Bataille de Crecy">
            <?php
            echo '<p>Pendant 115 ans, la France des Valois et l\'Angleterre des Plantagenêt se sont affrontés. Au 14e siècle, les deux royaumes sont les plus puissants d\'Europe.
            Le conflit trouve ses origines dans la rivalité des deux dynasties, aussi bien économique que politique. Le royaume anglais, constitué par la victoire du duc de Normandie, 
            devrait en principe appartenir à la couronne de France. Après des premiers affrontements, en 1259 le traité de Paris fixe le visage de l\'Angleterre et la France lui donne la Guyenne
            suite à une défaite militaire. Mais les jalousies continuent. Ils se disputent la riche Flandre, la succession de la Bretagne et la France veut récupérer la Guyenne. 
            Tout s\'accélère lorsque le 7 octobre 1337, l\'Anglais Edouard III, prétendant au trône par la lignée féminine, et neveu du roi de France défunt revendique la couronne de France. 
            La guerre démarre... pour cent ans.</p>';
        }

        else if ($_GET['date'] == 1360){
            echo '<h1>Edouard III renonce à la couronne de France</h1>';
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/King_Edward_III_from_NPG.jpg/800px-King_Edward_III_from_NPG.jpg" alt="Edouard III">
            <?php
            echo '<p>Entre 1337 et 1380, la puissance militaire anglaise écrase la monarchie française. Le 26 août 1346, Edouard III d\'Angleterre débarque en Normandie et défait les Français
            lors de la sanglante bataille de Crécy. Puis le 19 septembre 1356, les Français s\'inclinent après la bataille de Poitiers. Mais ces victoires anglaises, qui surviennent après 
            l\'épisode de la peste noire de 1347-1349, déclenchent d\'importantes émeutes. La résistance s\'organise à Paris notamment avec Etienne Marcel. Le 8 mai 1360, Edouard III
            et le dauphin de France Charles signent le traité de Brétigny. L\'anglais renonce à la couronne de France en échange du Poitou, du Limousin, du Périgord, du Quercy et du Rouergue.
            Bien entendu, l\'accord ne sera jamais respecté.</p>';
        }

        else if ($_GET['date'] == 1431){
            echo '<h1>Jeanne d\'Arc est brûlée</h1>';
            ?><br>
            <img src="https://download.vikidia.org/vikidia/fr/images/b/b8/Jeanne_d_Arc.jpg" alt="Jeanne d'Arc">
            <?php
            echo '<p>Qui est-elle cette jeune paysanne de dix sept ans, qui veut bouter les Anglais hors du royaume de France ?
            Audacieuse, Jeanne d\'Arc assure le 8 mars 1429 avoir reçu du ciel le commandement de conduire le Roi Charles VII à Reims. Après une victoire à Orléans le 7 mai, Jeanne, 
            en habits d\'homme et coupe au bol, déclenche un important mouvement de révolte contre l\'ennemi. Mais capturée par les Bourguignons à Compiègne le 24 mai 1430, elle est livrée aux Anglais.
            Jugée un an plus tard, celle qui est surnommée la pucelle d\'Orléans, est condamnée pour hérétisme car elle ne reconnaît pas l\'autorité de l\'Eglise catholique. Le 30 mai 1431, elle est brûlée 
            vive sur un bûcher dressé sur la place du Vieux-Marché de Rouen. Finalement, sa disparition n\'empêchera pas les Français de reconquérir leurs terres puisqu\'après la Normandie et la Guyenne, 
            la guerre de Cent ans s\'achève le 17 juillet 1453 par la déroute de l\'ennemi à Castillon.</p>';
        }

        else if ($_GET['date'] == 1515){
            echo '<h1>La bataille de Marignan</h1>';
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Marignan.jpg" alt="Bataille de Marignon">
            <?php
            echo "<p>Depuis le 25 janvier 1515, François Ier règne sur la France. Fasciné par l'Italie, l'art et la culture, il permet à la Renaissance de s'affirmer et de se déployer en son royaume.
            Commencées en 1494 par son cousin Charles VIII, les guerres ont pour but de faire tomber le duché de Milan. Le jeune roi François Ier, alors âgé de 21 ans, dirige sa première bataille 
            à Marignan, aujourd'hui Melegnano en Italie. A partir du 13 août, les armées s'affrontent dans l'un des plus meurtriers affrontements du siècle. La victoire des Français sur les Suisses,
            alliés des Milanais, le 13 septembre constitue le dernier rempart avant Milan. Triomphant, François Ier s'empare du duché et de la Lombardie. Le succès de Marignan reste toujours célèbre
            et une date marquante de l'Histoire de France.</p>";
        }

        else if ($_GET['date'] == 1539){
            echo "<h1>L\'ordonnance de Villers-Cotterets</h1>";
            ?><br>
            <img src="https://f.hypotheses.org/wp-content/blogs.dir/2728/files/2018/03/Ordonnance-de-Villers-Cotter%C3%AAts-1-672x367.jpg" alt="Ordonnance de Villers-Cotterets">
            <?php
            echo "<p>Le règne de François Ier s'étend de 1515 à 1547. Mécène des artistes et fervent admirateur de la Renaissance, le roi a fait bâtir de nombreux châteaux de l
            a Loire comme ceux de Blois et d'Amboise ou encore le célèbre Chambord. Mais le souverain a également été un protecteur des lettres. Le 10 août 1539, il signe l'ordo
            nnance de Villers-Cotterêts qui fait de la langue française la seule langue officielle du royaume. Elle sera dorénavant obligatoire dans les échanges politiques comme dans
            les œuvres littéraires et l'enregistrement des naissances et des décès. Ce manifeste établit ainsi la suprématie du Français sur le latin même si dans le territoire coexist
            ent différents patois.</p>";
        }

        else if ($_GET['date'] == 1562){
            echo "<h1>Le massacre de Wassy</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Massacre_de_Vassy_1562_print_by_Hogenberg_end_of_16th_century.jpg/1024px-Massacre_de_Vassy_1562_print_by_Hogenberg_end_of_16th_century.jpg" alt="Wassy">
            <?php
            echo "<p>A partir de 1534, l'Europe et notamment la France vont être secouées par une vague de protestation contre le pouvoir de Rome sur les affaires de l'Eglise.
            C'est ainsi que nait le protestantisme de Luther et de Calvin qui se traduit par un mouvement religieux et idéologique. En 1560, on dénombre près de 2 millions de protestants
            en France. Mais leur influence nouvelle inquiète et divise. Le 1er mars 1562, le duc François de Guise, fervent catholique, se rend à Wassy en Champagne et interrompt
            un culte protestant pour les rallier à lui. Devant l'opposition de l'assemblée, les hommes du duc auraient chargé. Selon certains historiens, le conflit aurait fait plus
            de 70 victimes et près de 200 blessés. Cette affaire, dite du massacre de Wassy, plonge le pays dans les terribles guerres de religion des catholiques contre les protestants
            qui vont durer jusqu'en 1598.</p>";
        }

        else if ($_GET['date'] == 1572){
            echo "<h1>Le massacre de la Saint-Barthélemy</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/La_masacre_de_San_Bartolom%C3%A9%2C_por_Fran%C3%A7ois_Dubois.jpg/800px-La_masacre_de_San_Bartolom%C3%A9%2C_por_Fran%C3%A7ois_Dubois.jpg" alt="Massacre de la Saint-Barthélemy">
            <?php
            echo "<p>Plongée dans une guerre de religion sans merci entre les catholiques et les protestants, la France connaît quelques périodes d'accalmie.
            Le 19 mars 1563, Catherine de Médicis, qui règne depuis la mort de son mari Henri II, fait rédiger l'édit d'Amboise qui accorde aux protestants la liberté de culte, 
            Paris excepté. Mais le conflit s'envenime jusqu'à atteindre le paroxysme de l'horreur. Le jour de la Saint-Barthélemy, le 24 août 1572, Catherine de Médicis, craint un soulèvement
            des protestants. Elle convainc le roi Charles IX, son fils, de mettre à mort tous les chefs du protestantisme de Paris. Mais le massacre ne s'arrête pas aux dignitaires
            et frappe toute la société : femmes, enfants et personnes âgées. La folie s'étend rapidement aux grandes villes de province jusqu'en octobre et aurait fait près de 30 000 victimes.</p>";
        }

        else if ($_GET['date'] == 1598){
            echo "<h1>L'édit de Nantes</h1>";
            ?><br>
            <img src="https://static.lpnt.fr/images/2013/07/23/edit-nantes-1692040-jpg_1594838_660x281.JPG" alt="Edit de Nantes">
            <?php
            echo "<p>Né dans la tradition calviniste, le futur Henri IV s'est converti au catholicisme le 25 juillet 1593. Sept mois plus tard,
            il monte sur le trône de France alors que le conflit entre protestants et catholiques continue. Reims et Paris se trouvent notamment contrôlées
            par des catholiques durs. Le Roi, qui arrive à faire rallier à lui la capitale, réalise la paix entre les communautés religieuses. Le 30 avril 1598,
            il signe l'Edit de Nantes. Le texte dit de pacification accorde aux protestants la liberté de culte dans certains lieux déterminés et leur donne plusieurs
            autres droits comme le celui d'aller à l'école, de posséder des places fortes militaires ou encore d'exercer des fonctions publiques. La promulgation de
            cet édit met un terme aux guerres de religion en France même si sa ratification a été plus lente dans certaines villes.</p>";
        }

        else if ($_GET['date'] == 1610){
            echo "<h1>Henri IV est assassiné</h1>";
            ?><br>
            <img src="https://www.herodote.net/Images/Ravaillac_HousezXIX.jpg" alt="Assassinat d'Henry IV">
            <?php
            echo "<p>Le célèbre roi Henri IV, qui a régné sur la France entre 1589 et 1610, connaît une fin tragique en mourant assassiné, le 14 mai 1610. Alors que le souverain a réalisé
            une paix fragile entre les catholiques et protestants, il ne fait pas l'unanimité et une nouvelle guerre se profile contre les royaumes catholiques d'Espagne et d'Autriche,
            aux portes de la France. Le 16 mai dans l'après-midi,  Henri IV se rend en carrosse à l'Arsenal à Paris, sans escorte. Mais lorsque le convoi se trouve bloqué par une charrette
            de foin dans la rue de la Ferronnerie, François Ravaillac, catholique fanatique, poignarde deux fois le souverain. Henri IV mourra sur le chemin du retour au Louvre.
            Ravaillac, rapidement jugé, finira par mourir après d'innombrables séances de tortures sur la place de Grève de Paris, actuel Hôtel-de-Ville. La thèse du complot, longtemps 
            privilégiée est désormais écartée par les historiens car on sait que l'homme a agi seul. Marie de Médicis, veuve d'Henri IV, devient régente.</p>";
        }

        else if ($_GET['date'] == 1629){
            echo "<h1>La paix d'Alès</h1>";
            ?><br>
            <img src="https://p6.storage.canalblog.com/61/70/1650729/124053654.jpg" alt="La paix d'Ales">
            <?php
            echo "<p>L'Edit de Nantes, signé en 1598, avait apaisé les tensions. Mais cette accalmie sera relative car des tensions entre communautés religieuses existent
            toujours. Un homme : le cardinal Richelieu souhaite la disparition de l'influence des protestants. Conseiller du jeune roi Louis XIII, Richelieu veut faire
            fléchir notamment La Rochelle, haut lieu de la contestation protestante soutenue par le pouvoir anglais. Le 10 septembre 1627, Louis XIII ordonne le siège
            de la ville et Richelieu donne l'idée d'une gigantesque digue pour empêcher tout ravitaillement par l'ennemi anglo-saxon. Après une terrible famine, 20 000
            personnes auraient péri en un peu plus d'un an, la Rochelle capitule le 28 octobre 1628. Cette victoire aboutit à l'édit de Nîmes, dit la paix d'Alès.
            Le 28 juin 1628, le roi garantit toujours la liberté de culte aux protestants mais leur pouvoir et leurs prérogatives sont interdites avec la destruction des places-fortes.
            En réalité, cette paix traduit davantage un retour à la suprématie du catholicisme.</p>";
        }

        else if ($_GET['date'] == 1685){
            echo "<h1>L'édit de Fontainebleau</h1>";
            ?><br>
            <img src="http://www.axl.cefan.ulaval.ca/francophonie/images/Edit_de_Fontainebleau.jpg" alt="Edit de Fontainebleau">
            <?php
            echo "<p>Louis XIV, sacré à Reims le 7 juin 1654, a marqué l'Histoire par sa régence en solitaire sans écouter ses conseillers.
            Très vite, il souhaite réaliser l'unité religieuse et doit donc affaiblir le protestantisme dont les fidèles sont estimés à un million.
            Après avoir encouragé la conversion religieuse, il fait détruire des temples, diminue le nombre d'écoles réformées et oblige à célébrer les enterrements la nuit.
            A partir de 1679, la répression s'intensifie avec notamment des conversions forcées. Et le 18 octobre 1685, le roi signe l'édit de Fontainebleau qui révoque l'édit de pacification pris 
            à Nantes. Le culte protestant est interdit et tous les temples sont condamnés à la destruction. Il représente l'acte le plus important et certainement 
            le plus lourd de conséquences de son règne. Plusieurs centaines de milliers de protestants quittent alors le royaume. Il faudra attendre 1787 pour que Louis
            XVI leur accorde l'état civil et donc une place au sein de la France.</p>";
        }

        else if ($_GET['date'] == 1715){
            echo "<h1>Louis XIV meurt</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Louis_XIV_of_France.jpg/800px-Louis_XIV_of_France.jpg" alt="Louis XIV">
            <?php
            echo "<p>Après le plus long règne d'un roi de France, 54 ans, Louis XIV le flamboyant s'éteint, laissant son royaume exsangue financièrement après de nombreuses guerres.
            La personnalité du roi, qui a choisi l'emblème du Soleil en 1662, a traversé les siècles. Autoritaire, il incarne la monarchie absolue en réglant la vie à la cour et
            tour à tour en favorisant ses préférés ou en écartant ses nouveaux ennemis. Guerrier, il a conduit de nombreux conflits : le Brabant espagnol, puis la Hollande. Mais
            c'est certainement la vie à Versailles qui reste attachée au personnage. Du petit pavillon de chasse de Louis XIII, le roi en fait sa résidence et les travaux, qui 
            débutent en 1664, ne s'arrêteront quasiment jamais. Jardins, fontaines, galerie des glaces... Versailles est le lieu de tous les excès. Louis XIV, ses maîtresses,
            son goût pour les plaisirs et ses passions excessives commencent à affaiblir peu à peu son autorité. Après la mort du Grand Dauphin en 1711, Louis XIV sait que son petit-fils lui succèdera.
            Il meurt le 1er septembre 1715 d'une gangrène.</p>";
        }

        else if ($_GET['date'] == 1770){
            echo "<h1>Le futur Louis XVI épouse Marie-Antoinette</h1>";
            ?><br>
            <img src="https://o1.llb.be/image/thumb/55506f813570fde9b32bdaa9.jpg" alt="Louis XVI Marie-Antoinette">
            <?php
            echo "<p>Timide, pieux, réservé : c'est ce jeune homme là qui épouse en 1770, à l'âge de 15 ans l'autrichienne Marie-Antoinette, 14 ans.
            Louis Auguste n'était pas destiné à devenir le souverain de France mais la mort du dauphin, son frère, en 1761 change la donne et le place en première ligne.
            C'est sous l'impulsion de son grand-père Louis XV que l'union se fait afin de renforcer l'alliance entre la France et l'Autriche. Le 10 mai 1774, la mort du roi,
            fait du jeune homme le nouveau souverain, son père ayant disparu quelques années auparavant. D'une grande beauté, Marie-Antoinette souffre de la distance avec son
            époux qui ne consommera leur mariage qu'au bout de sept ans. Mais déjà les graines de la future révolution apparaissent. La discrétion des premières années de la
            reine laisse bientôt place aux frivolités et aux excentricités qui attisent les reproches. Louis XVI quant à lui tergiverse longtemps avant la moindre décision
            préférant la guerre et ses enfants, puisqu'il est père depuis 1778.</p>";
        }

        else if ($_GET['date'] == 1789){
            echo "<h1>La prise de la Bastille</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Prise_de_la_Bastille.jpg/800px-Prise_de_la_Bastille.jpg" alt="Prise de la Bastille">
            <?php
            echo "<p>Certains y voient le moment clé de la Révolution française. L'Assemblée nationale se proclame Assemblée constituante le 9 juillet pour travailler sur la rédaction
            d'une Constitution : ce qui signe la fin de la suprématie du roi et donc la mort de l'Ancien régime. Mais à Paris et à Versailles l'agitation est grande. De nombreuses
            troupes stationnent autour des villes à la demande de Louis XVI. Le 11 juillet, le renvoi de Necker, argentier du pouvoir galvanise la foule. Deux jours plus tard, de 
            nombreuses personnes prennent les armes par crainte d'une charge des troupes royales. Le 14 juillet au matin, cette foule se masse à la Bastille, prison royale quasi 
            désaffectée, qui contiendrait des armes et de la poudre. Après l'assaut des révoltés et des affrontements, le gouverneur Launay se rend et finira massacré avec ses hommes.
            L'évènement marque le passage à une révolution populaire. Depuis 1880, cette date est la fête nationale de la France.</p>";
        }

        else if ($_GET['date'] == 1791){
            echo "<h1>Fuite de Louis XVI</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Arrestation_de_Louis_Capet_%C3%A0_Varennes%2C_22_juin_1791%2C_Mus%C3%A9e_de_la_R%C3%A9volution_fran%C3%A7aise_-_Vizille.jpg/1024px-Arrestation_de_Louis_Capet_%C3%A0_Varennes%2C_22_juin_1791%2C_Mus%C3%A9e_de_la_R%C3%A9volution_fran%C3%A7aise_-_Vizille.jpg" alt="Varennes">
            <?php
            echo "<p>Le pouvoir royal semble donner des gages aux révolutionnaires : ainsi le 14 juillet 1790, le roi participe à la fête de la Fédération qui commémore la 
            prise de la Bastille. Mais les apparences sont trompeuses. Louis XVI, qui ne supporte pas la baisse d'influence de l'église catholique et la confiscation des
            biens du clergé sollicite en secret l'appui des royaumes alliés. Dans la nuit du 20 juin 1791, le roi et sa famille quittent en secret les Tuileries pour rejoindre
            la frontière rhénane, près du Luxembourg. Le comte de Mirabeau avait conseillé au souverain de tenter un coup de force en rejoignant les troupes de Condé qui
            n'attendaient que l'ordre d'envahir. Au petit matin, la fuite est découverte et des soldats partent à leur poursuite. Le carrosse royal, qui est arrivé le soir
            à Sainte-Ménehould en Champagne, a du retard et les partisans censés le protéger ne sont pas arrivés. Selon la légende, un villageois aurait reconnu le
            visage du roi grâce à un écu. Pourchassé, le cortège sera finalement arrêté à Varennes vers 23 heures. Le 22 juin au matin, le carrosse reprend la route vers
            Paris accompagné de trois députés. L'arrivée dans la capitale, le 25 juin, se fait d'abord dans un silence de plomb puis la foule redouble d'agressivité.</p>";
        }

        else if ($_GET['date'] == 1792){
            echo "<h1>La bataille de Valmy</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Valmy_Battle_painting.jpg/1024px-Valmy_Battle_painting.jpg" alt="Bataille de Valmy">
            <?php
            echo "<p>L'issue de cette bataille aurait pu sceller le sort de la Révolution française. Début septembre 1792, les troupes prussiennes et autrichiennes
            se trouvent en Champagne et marchent vers Paris. Le 20, les sans-culottes leur font face à Valmy, dans la Marne. Les généraux Dumouriez et Kellermann utilisent
            la supériorité française de l'époque, des canons, pour remporter la victoire sur l'ennemi. La Prusse et l'Autriche, en déroute, retirent leurs troupes. 
            Le mystère de cette retraite reste entier : certains historiens évoquent une dysenterie, d'autres des trahisons. Valmy réveille en tout cas les élans des révolutionnaires pour la nation.
            Le roi, déchu de ses pouvoirs depuis le 20 juin, reste toujours écarté des affaires. Au soir du 20 juin, la Convention, nouveau nom de l'Assemblée, se réunit.
            Le lendemain, elle abolit la monarchie. Le 22 septembre, un nouveau calendrier voit le jour en l'an 1 de la République, nouveau régime qui naît ainsi discrètement.</p>";
        }

        else if ($_GET['date'] == 1793){
            echo "<h1>Louis XVI est guillotiné</h1>";
            ?><br>
            <img src="https://www.france-pittoresque.com/IMG/jpg/Decapitation-Louis-XVI.jpg" alt="Execution de Louis XVI">
            <?php
            echo "<p>\"Je meurs innocent des crimes dont on m'accuse\" : tels sont les mots que prononce Louis XVI sur l'échafaud. Après l'arrestation de la famille royale et sa détention
            à la prison du Temple, à Paris, s'ouvre son procès. Le souverain comparaît à partir du 11 décembre 1792. ll est accusé entre autres de conspiration avec l'ennemi,
            d'être responsable de plusieurs massacres et d'avoir organisé la contre-révolution. Nul n'est dupe de l'issue. Le 18 janvier 1793, par 361 voix contre 360 les députés votent sa condamnation à mort.
            Le 21 janvier au matin, Louis XVI est emmené place de la Révolution, l'actuelle place de la Concorde. Digne dans ses derniers instants, il marque les esprits en clamant son innocence.
            Il meurt guillotiné à 10h20. Sa mort hautement symbolique marque un tournant dans la Révolution française. La reine Marie-Antoinette, elle, comparaît en octobre 1793 lors d'un procès expéditif.
            Elle est guillotinée le 16 octobre sur la même place. Son fils, le dauphin Louis XVII, meurt en 1795 à la prison du Temple à l'âge de dix ans.</p>";
        }

        else if ($_GET['date'] == 1799){
            echo "<h1>Le coup d'Etat de Napoléon Bonaparte</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Bouchot_-_Le_general_Bonaparte_au_Conseil_des_Cinq-Cents.jpg/800px-Bouchot_-_Le_general_Bonaparte_au_Conseil_des_Cinq-Cents.jpg" alt="Napoleon Bonaparte">
            <?php
            echo "<p>Dix ans après la prise de la Bastille, le régime politique est balayé par la prise de pouvoir d'un homme. Le général Napoléon Bonaparte s'est fait connaître pour ses conquêtes militaires :
            l'Italie en 1797 et l'Egypte en juillet 1799. Le pays subit une instabilité politique : depuis l'instauration du Directoire en octobre 1795, deux Assemblées s'affrontent tandis que le pouvoir
            est aux mains de cinq directeurs. Le 9 novembre 1799, ou 18 Brumaire selon le calendrier républicain, les assemblées sont déplacées à Saint-Cloud en raison de la trop forte agitation ambiant
            e face à un prétendu complot royaliste. Bonaparte se serait arrangé avec deux directeurs pour qu'ils démissionnent, en fait arrêter deux autres et aurait corrompu le dernier. Le lendemain, a
            près avoir pris la parole face aux députés, il obtient d'eux le vote d'une nouvelle Constitution, certains disent sous la contrainte des armes. Le consulat est né : Napoléon devient Premier C
            onsul ; Emmanuel Sieyés et Roger Ducos sont les deux autres et se partagent l'exécutif.</p>";
        }

        else if ($_GET['date'] == 1804){
            echo "<h1>Le sacre de Napoleon 1er</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Jacques-Louis_David_-_The_Coronation_of_Napoleon_%281805-1807%29.jpg/1024px-Jacques-Louis_David_-_The_Coronation_of_Napoleon_%281805-1807%29.jpg" alt="Sacre de Napoléon 1er">
            <?php
            echo "<p>Devenu Premier Consul de France et conforté par l'entrée en vigueur en février 1799 d'une Constitution rédigée sur mesure, Bonaparte surpasse les pouvoirs
            législatif et exécutif. D'abord, les députés ne votent plus les lois et ensuite il peut imposer ses décisions sans l'aval des deux autres consuls. Très populaire,
            il conforte le régime républicain contre l'aristocratie ou un éventuel retour de la monarchie. L'ultra contrôle de toute la vie politique et judiciaire et l'obsession
            de l'ordre et de la concorde ne le satisfont pas encore tout à fait. Nommé consul à vie en 1802, Bonaparte ne franchit en fait qu'une étape de plus le 2 décembre 1804.
            Après le vote favorable des Français, il se fait sacrer Empereur des Français à Notre-Dame à Paris et devient Napoléon Ier. L'Histoire raconte qu'il place lui-même la
            couronne sur sa tête. Il gouverne désormais seul. Tous les symboles de la République comme le 14 juillet et la Marseillaise disparaissent au profit de l'Empire.</p>";
        }

        else if ($_GET['date'] == 1805){
            echo "<h1>La victoire d'Austerlitz</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Austerlitz-baron-Pascal.jpg/1280px-Austerlitz-baron-Pascal.jpg" alt="Austerlitz">
            <?php
            echo "<p>A partir de 1805, l'Europe s'unit face aux ambitions de l'Empereur français. L'Autriche, la Russie et la Suède forment une coalition face à la progression de l'armée napoléonienne
            en Italie et en Allemagne. Génie de la tactique militaire, Napoléon mène ses troupes tambour battant pour des offensives rapides qui surprennent l'ennemi. La victoire d'Austerlitz
            est révélatrice de sa supériorité. Après la prise de Vienne le 13 novembre 1805, les Français marchent vers l'actuelle République tchèque. Arrivés sur le plateau de Pratzen, près
            du village d'Austerlitz, Napoléon fait évacuer ses troupes à la surprise générale. Les troupes austro-russes qui s'étendent sur toute la longueur du massif, sont prises au piège
            . Au matin du 2 décembre 1805, les Français attaquent le front ennemi qui est trop large pour être efficace. Après seulement neuf heures, la bataille est gagnée. Napoléon Ier bat
            ainsi Alexandre 1er, tsar de Russie, et François II de Habsbourg. Cette victoire signe l'extension de l'Empire napoléonien et renforce une fois de plus sa légende.</p>";
        }

        else if ($_GET['date'] == 1814){
            echo "<h1>Napoléon 1er abdique</h1>";
            ?><br>
            <img src="https://www.herodote.net/_images/napoleon_abdication_maxi.jpg" alt="Napoleon abdique">
            <?php
            echo "<p>Après Austerlitz, rien ne semble arrêter Napoléon. Il remporte Iéna en 1806 face à la Prusse, Eylau l'année d'après face à la Russie, Wagram en 1809 face aux Autrichiens.
            Mais s'il a abandonné l'idée d'envahir l'Angleterre, la Russie l'attire toujours. Certes, l'Empereur fait son entrée à Moscou le 14 septembre 1812, mais la résistance des Russes
            puis la défaite à Bérézina, le 25 novembre, signent la retraite de Russie et la défaite de la France. La dureté de l'hiver et des batailles ont causé la mort d'une très grande
            partie des troupes napoléoniennes. Cet événement lance le réveil de l'Europe contre Napoléon. Après la perte de la campagne d'Allemagne, le front se déplace en France. Le 30 mars
            1814, les Russes et les Prussiens prennent Paris. Déchu de son trône le 2 avril, Napoléon abdique le 6 avril et signe le traité de Fontainebleau le 11 avril. Après avoir tenté de
            se suicider, il part en exil sur l'île d'Elbe le 3 mai.</p><p>Lorsque le tsar de Russie Alexandre Ier pénètre dans Paris en 1814, il vient donner la paix aux Français après plus de dix ans 
            de guerre et de révolutions successives.
            Si Napoléon avait mis un terme à la Révolution française, il n'a pu empêcher la survie du sentiment monarchique et les ambitions des royalistes. C'est à leur faveur que l'Empire tombe.
            Talleyrand, autrefois fidèle de l'Empereur, et alors chef du gouvernement provisoire réussit à faire revenir un roi sur le trône français. Le 24 avril 1814, le comte de Provence, frère de Louis XVI,
            en exil à Londres, débarque à Calais. Il est sacré roi de France et devient Louis XVIII, le jeune dauphin Louis XVII étant mort à la prison du temple en 1795. Le 2 mai 1814, le nouveau souverain
            fait une déclaration dite de Saint-Ouen dans laquelle il affirme vouloir une monarchie constitutionnelle, suivant l'exemple anglais. Une Charte en ce sens, et non une Constitution jugée
            trop révolutionnaire, est promulguée le 4 juin 1814 et confirme certains droits de 1789. S'ouvre alors la période dite de la Restauration, mais elle sera de courte durée.</p>";
        }

        else if ($_GET['date'] == 1815){
            echo "<h1>Napoléon perd à Waterloo</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Andrieux_-_La_bataille_de_Waterloo.jpg/1024px-Andrieux_-_La_bataille_de_Waterloo.jpg" alt="Waterloo">
            <?php
            echo "<p>Las de son exil sur l'île d'Elbe, Napoléon Ier reprend la route vers Paris, le 26 février 1815, pour un nouveau coup d'Etat
             baptisé le Vol de l'Aigle. Arrivé à Grenoble, il est rejoint par des soldats, et peu à peu par la majorité des généraux. Après son arrivée dans la capitale le 19 mars,
              Louis XVIII fuit en Belgique. Le lendemain, Napoléon Ier redevient l'Empereur de France. Pour contrer les forces européennes qui veulent le chasser du pouvoir,
               Napoléon masse ses troupes à la frontière belge, face à l'ennemi. Si les Prussiens font marche arrière le 16 juin, la bataille de Waterloo, au sud de Bruxelles, 
               deux jours plus tard signe la mort politique de Napoléon. La résistance et la supériorité de l'adversaire dispersent le front français et mettent en déroute son armée.
                De retour à Paris, il signe son abdication le 23 juin 1815. Les Cent jours de Napoléon se terminent. A la fin du mois, il rejoint l'île de Sainte-Hélène où, emprisonné,
                 il finira par mourir le 5 mai 1821.</p>";
        }

        else if ($_GET['date'] == 1851){
            echo "<h1>Napoléon III empereur</h1>";
            ?><br>
            <img src="https://www.napoleon.org/wp-content/thumbnails/uploads/2016/01/488181_1-tt-width-348-height-500-crop-1-bgcolor-ffffff-lazyload-0.jpg" alt="Napoleon III">
            <?php
            echo "<p>Après une nouvelle révolution le 23 février 1848, le roi Louis-Philippe abdique le lendemain et la seconde République est proclamée le 25 février. Assemblée
             unique, président de la République et des élections sont organisées les 10 et 11 décembre 1848. C'est à cette occasion que Louis Napoléon Bonaparte, neveu de Napoléon
              Ier, fait son entrée sur la scène politique française. Il se fait élire président pour quatre ans à une écrasante majorité. Populaire et habile, l'homme veut rester
               au pouvoir mais l'Assemblée lui refuse une révision constitutionnelle pour étendre son mandat. Le 2 décembre 1851, célèbre date de l'anniversaire d'Austerlitz,
                il réalise lui-aussi un coup d'Etat. Dans la nuit, il fait arrêter les chefs des monarchistes et des républicains et dissout l'Assemblée. Après des émeutes à Paris
                 et dans de nombreux départements après le 4 décembre, des opposants sont arrêtés et le calme revient. Un plébiscite organisé les 21 et 22 décembre donne à Louis
                  Napoléon les pleins pouvoirs. Il devient l'Empereur Napoléon III le 2 décembre 1852.</p>";
        }

        else if ($_GET['date'] == 1870){
            echo "<h1>La défaite de Sedan</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Karte_zur_Schlacht_bei_Sedan_%2801.09.1870%29.jpg" alt="Sedan">
            <?php
            echo "<p>Dans les premières années du Second Empire, Napoléon III poursuit une politique de paix, à rebours de son oncle aux ambitions expansionnistes. 
            Mais les désirs de conquête reviennent vite : guerre de Crimée et du Mexique gagnées en 1854 et 1863. Mais c'est l'éternelle rivalité entre la France et la Prusse qui aura raison de l'empereur.
            Les deux pays se disputent à propos de la couronne d'Espagne qui pourrait revenir à un proche du roi de Prusse, Guillaume Ier. Le 13 juillet 1870, une dépêche rédigée à Ems,
            en Allemagne, confirme l'abandon du projet par la Prusse. Mais la réponse, qui aurait été manifestement tronquée par le chancelier allemand Bismarck, était devenue humiliante
            pour la France. Le 19, Napoléon III déclare la guerre à la Prusse. Mais celle-ci possède de nombreux avantages en hommes, en matériel et en stratégie. Le 31 août, 
            les troupes françaises sont prises au piège à Sedan. Le 2 septembre, l'Empereur se rend et le 4 la République est proclamée mais la guerre n'est pas terminée.</p>";
        }

        else if ($_GET['date'] == 1871){
            echo "<h1>La France perd l'Alsace et la Lorraine</h1>";
            ?><br>
            <img src="https://france3-regions.francetvinfo.fr/grand-est/sites/regions_france3/files/styles/top_big/public/assets/images/2014/09/19/alsace_lorraine.jpg?itok=zctX2yeG" alt="Alsace Lorraine">
            <?php
            echo "<p>Si Napoléon III a quitté le pouvoir, la France subit toujours l'invasion prussienne et son armée avance à grands pas vers Paris. Battue à Orléans, au Mans, à Saint-Quentin, puis à Buzenval, la France ne peut plus empêcher la progression prussienne et capitule le 28 janvier. Un armistice est signé ce jour là à Versailles alors que le gouvernement provisoire français se déchire entre pro et anti-belligérants. Adolphe Thiers, nommé à la tête du pouvoir exécutif par l'Assemblée en février 1871, signe le traité de paix du 26 février avec le chancelier allemand Bismarck. Les clauses très strictes marqueront durablement les relations entre les deux pays et constitueront déjà les germes de la Première guerre mondiale. La France consent à abandonner à la Prusse l'Alsace et la Lorraine et à lui verser une indemnité colossale. Le 1er mars, les Prussiens font leur entrée dans Paris, sans compter sur l'insurrection grandissante des Parisiens.</p>
            <p>Craignant l'arrivée des Prussiens en 1871, des gardes nationaux parisiens ont acheminé des canons dans les hauteurs de la capitale, notamment à Montmartre. Après l'armistice et le traité de paix franco-prusse, une partie des Parisiens se révolte contre le pouvoir et les royalistes. Mais le 17 mars 1871, le président Adolphe Thiers ordonne de récupérer les canons. Les troupes censées agir le lendemain sympathisent avec la foule. Dès le soir même, le comité s'installe à l'Hôtel-de-Ville. Le 26 mars 1871, il prend le nom de Commune de Paris : elle gère les affaires de la cité sans soutien de l'Etat. Calendrier révolutionnaire rétabli, proclamation de la laïcité, enseignement gratuit... La Commune prend de nombreuses décisions sociales. Toutefois le rêve des communards ne durera que soixante-douze jours. Du 21 au 28 mai, les soldats du président Thiers, dits les Versaillais, attaquent la capitale. Le 23, plusieurs grands monuments brûlent dont les Tuileries et l'Hôtel-de-Ville. Fusillades, massacres : 30 000 personnes auraient péri lors de cette semaine sanglante. La Commune tombe dans le sang le 28 mai.</p>";
        }

        else if ($_GET['date'] == 1881){
            echo "<h1>Jules Ferry impose l'enseignement primaire gratuit</h1>";
            ?><br>
            <img src="https://img-4.linternaute.com/xjGPOlDZtxSglzfxslW9a30rnDQ=/1240x/smart/d37a7ffdeb514202ae2eaa6c919e979b/ccmcms-linternaute/11674678.jpg" alt="Jules Ferry">
            <?php
            echo "<p>Journaliste, député, maire de Paris avant la Commune de 1871, Jules Ferry est un homme politique toujours admiré de nos jours. En février 1879, sous la présidence de la République de Jules Grévy, il est ministre de l'Instruction civique et des Beaux Arts. Ses différentes actions porteront essentiellement sur l'instruction et la religion. Le 15 mars de cette même année, il propose d'interdire aux congrégations religieuses d'enseigner. Anticlérical convaincu, il veut empêcher l'Eglise catholique et notamment les Jésuites d'instruire les enfants. Malgré les protestations de l'Assemblée, le projet de loi est adopté. Le 10 juillet, la laïcité de l'enseignement entre en vigueur en France. En septembre 1880, Jules Ferry devient Président du conseil et appuie une des plus importantes lois de notre pays. Le 16 juin 1881, l'enseignement public devient gratuit. La loi de 1882 précise que l'instruction doit être obligatoire de 6 à 13 ans, d'un jour de congé par semaine et que l'instruction religieuse sera réalisée en dehors des établissements publics. On lui doit également la loi sur la liberté de la presse du 29 juillet 1881 et de celle autorisant les syndicats le 21 mars 1884.</p>";
        }

        else if ($_GET['date'] == 1894){
            echo "<h1>Le Capitaine Dreyfus est condamné</h1>";
            ?><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Alfred_Dreyfus_%281859-1935%29.jpg/800px-Alfred_Dreyfus_%281859-1935%29.jpg" alt="Dreyfus">
            <?php
            echo "<p>Cette affaire aura déclenché toutes les passions pendant dix ans. Tout commence par une affaire d'espionnage au profit de la Prusse, dans le contexte de la perte de la guerre de 1870-1871. Le Capitaine Alfred Dreyfus, accusé d'être la taupe, est arrêté le 15 octobre 1894 et écroué. Dégradé dans la cour des Invalides en janvier 1895, il est ensuite exilé au bagne de l'île du Diable en Guyane. L'histoire, qui devient très vite \"l'affaire Dreyfus\", révèle en fait l'antisémitisme ambiant. L'homme a été déclaré coupable en raison de sa confession juive. Son frère Mathieu enquête et tient les preuves de son innocence mais le pays reste toujours divisé entre les dreyfusards et les antis. Le 13 janvier 1898, l'écrivain Emile Zola publie son fameux article \"J'accuse\" en une du quotidien L'Aurore. Il prend position pour le Capitaine et dénonce un mensonge organisé. Finalement, le 30 août de la même année, le colonel Henry avoue avoir fabriqué de fausses preuves pour faire accuser Dreyfus. Le dossier est rouvert, l'homme rentre de Guyane et est gracié en 1899. Il faudra attendre le 12 juillet 1906 pour qu'il soit totalement innocenté et qu'il réintègre l'armée.</p>";
        }

        else if ($_GET['date'] == 1905){
            echo "<h1>La séparation de l'Eglise et de l'Etat</h1>";
            ?><br>
            <img src="https://www.libre-penseur-adlpf.com/wp-content/uploads/2019/01/xpetition-loi-1905.jpg.pagespeed.ic.W6GKiGn3o-.webp" alt="1905">
            <?php
            echo "<p>Avec la loi de 1905, la IIIe République réalise l'idéal républicain de laïcisation de la société. Depuis 1516, le concordat organisait les relations entre la France et l'Eglise. La religion catholique est majoritaire, religion d'Etat et la richesse du clergé fait des envieux. Le mouvement révolutionnaire de 1789 remet en cause la suprématie religieuse. En 1789, les biens du clergé sont nationalisés, les prêtres doivent signer la nouvelle Constitution civile et en 1795, l'Eglise doit subvenir seule à ses besoins. Mais Bonaparte fait marche arrière avec le concordat de 1801 qui redonne à l'Eglise une influence en France. A partir de 1870, l'anticléricalisme se développe en France. De nombreux politiques notamment socialistes et radicaux s'unissent contre l'ascendance de l'Eglise dans un contexte d'Affaire Dreyfus qui attise les passions. Le gouvernement français conteste de plus en plus les décisions du Vatican et leurs relations deviennent exécrables jusqu'à la rupture diplomatique en 1904. Au terme de débats longs et houleux, la loi sur la séparation de l'Eglise et de l'Etat est adoptée le 3 juillet 1905, fortement soutenue par le député Aristide Briand. La France laïque reconnaît la liberté de conscience et le libre exercice des cultes mais n'en finance désormais plus aucun.</p>";
        }

        else if ($_GET['date'] == 1914){
            echo "<h1>L'Allemagne déclare la guerre à la France</h1>";
            ?><br>
            <img src="https://www.francetvinfo.fr/image/750fhsbhc-d12b/1200/450/4062161.jpg" alt="1ere guerre mondiale">
            <?php
            echo "<p>Si elle débute réellement pendant l'été 1914, la Première guerre mondiale fermente depuis de nombreuses années et principalement depuis la défaite de la France en 1871 et la perte de l'Alsace-Lorraine. Les rivalités franco-allemandes ainsi que la course à l'armement des deux côtés du Rhin et en Angleterre n'apaisent pas les tensions. Mais un événement, a priori sans conséquence et éloigné, va mettre l'Europe à feu et à sang. Le 28 juin 1914, un nationaliste serbe assassine l'archiduc François-Ferdinand, héritier d'Autriche-Hongrie, et son épouse. L'Autriche, qui veut annexer la Serbie, se sert de l'événement et obtient le soutien de l'Allemagne. Dès lors, l'escalade à la guerre démarre. L'alliance Allemagne-Autriche-Hongrie s'oppose à celle de la France-Russie-Angleterre. Le 1er août, le Reich déclare la guerre à la Russie qui soutient les Serbes puis le 3 à la France qui se range du côté de son allié russe. Le Royaume-Uni entre lui-aussi en guerre contre les Allemands le 4 après la violation de la neutralité de la Belgique. Les déclarations de guerre se succèdent entre pays européens jusqu'aux pays du Commonwealth et le Japon le 23 août contre l'Allemagne : la guerre mondiale commence.</p>";
        }

        else if ($_GET['date'] == 1916){
            echo "<h1>La bataille de Verdun</h1>";
            ?><br>
            <img src="http://s.rfi.fr/media/display/41cd5e0e-109c-11ea-b30f-005056bf7c53/w:980/p:16x9/000_SAPA981020922090_0.jpg" alt="Verdun">
            <?php
            echo "<p>Si le plan Schlieffen d'invasion de la France en six semaines a échoué notamment en raison de problèmes logistiques et de communication, le conflit ne s'arrête pas pour autant. Pire, d'une guerre de mouvement elle devient une guerre de position avec le fameux épisode des tranchées. Elles s'étendent en gros de la mer du Nord aux Vosges. Début 1916, les Allemands attaquent le camp retranché de Verdun. Le but est à la fois d'épuiser et de réduire à néant les forces et les troupes de l'ennemi. La terrible bataille de Verdun débute le 21 Février 1916. Après la prise du fort de Douaumont, les troupes du Reich progressent sur la rive gauche de la Meuse. Le maréchal Pétain, chargé d'organiser la défense de Verdun, commande des renforts sur la Voix Sacrée, la route entre Bar-le-Duc et la ville. A la fin du mois d'août, l'avantage change de camp. Après plusieurs offensives françaises, celle de Guillaumat, le 23, est décisive et signe la victoire de la bataille. Bain de sang, boucherie, barbarie, les qualificatifs ne manquent pas parmi les survivants. Les pertes ont été épouvantables : environ 350 000 hommes de chaque côté.</p>";
        }

        else if ($_GET['date'] == 1918){
            echo "<h1>La capitulation de l'Allemagne</h1>";
            ?><br>
            <img src="https://france3-regions.francetvinfo.fr/hauts-de-france/sites/regions_france3/files/styles/top_big/public/assets/images/2018/11/11/brit-lille-liberate-3937572.jpg?itok=szS-0ZWr" alt="Fin de la guerre">
            <?php
            echo "<p>Après Verdun, la bataille de la Somme fait de nombreuses victimes dans chaque camp, sans réelle progression. Mais si l'offensive française du Chemin des Dames du général Nivel est un échec en 1917, la mondialisation du conflit va faire tomber l'Allemagne. Après la Roumanie, les Etats-Unis entrent en guerre contre le Reich. A l'été 1918, plusieurs initiatives françaises lui sont favorables : Foch conquiert Château-Thierry le 18 juillet et décide le 24 de généraliser l'offensive aidé par les troupes américaines. Peu à peu, le nord de la France est libéré comme Lille le 17 octobre. Les forces allemandes, qui ont reculé, craignent un assaut majeur. Finalement, les allemands acceptent un armistice qui met fin aux combats. Il est signé le 11 novembre 1918 vers 5 h du matin dans la forêt de Compiègne, dans un wagon de train. Les clauses sont strictes : évacuation du front et des pays occupés et réquisition entre autres des canons et des armes. Renouvelé trois fois, l'accord aboutira finalement à plusieurs traités de paix, dont celui de Versailles signé le 28 juin 1919 qui modifie à nouveau le paysage de l'Europe.</p>";
        }

        else if ($_GET['date'] == 1939){
            echo "<h1>Début de la 2nd guerre mondiale</h1>";
            ?><br>
            <img src="https://savoirs.rfi.fr/sites/default/files/styles/rfi_desktop_page_conteneur/public/medias/images/vignettes/gettyimages-542356737_1920.jpg?itok=daaiwGqo&timestamp=1540193808" alt="début 2nd guerre mondiale">
            <?php
        }

        else if ($_GET['date'] == 1945){
            echo "<h1>Fin de la 2nd guerre mondiale</h1>";
            ?><br>
            <img src="https://cdn.radiofrance.fr/s3/cruiser-production/2019/05/c717325b-54fd-4af8-a4d7-654e3e96200d/870x489_8-mai-1945-10.webp" alt="fin de la guerre">
            <?php
        }


    }

    