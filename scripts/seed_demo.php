<?php
require __DIR__.'/../vendor/autoload.php';
if (class_exists(Symfony\Component\Dotenv\Dotenv::class)) {
  (new Symfony\Component\Dotenv\Dotenv())->bootEnv(__DIR__.'/../.env');
}
$kernel = new App\Kernel('dev', true); $kernel->boot();
$c = $kernel->getContainer()->get('doctrine')->getConnection();
$b = new DateTimeImmutable('2026-02-12 10:00:00');
$D = fn($d) => $d->format('Y-m-d');
$T = fn($d) => $d->format('Y-m-d H:i:s');
$tables=['match_teams','matches','tournament_teams','tournaments','tournament_requests','orders','cart_items','carts','product_images','products','team_invites','team_join_requests','team_members','teams','reports','notifications','messages','post_likes','comments','post_images','posts','friendships','friend_requests','games','categories','images','users'];

try {
  $c->executeStatement('SET FOREIGN_KEY_CHECKS=0');
  foreach($tables as $t){$c->executeStatement("TRUNCATE TABLE `$t`");}
  $c->executeStatement('SET FOREIGN_KEY_CHECKS=1');

  $roles=['ADMIN','ORGANIZER','CAPTAIN','PLAYER','ORGANIZER','CAPTAIN','PLAYER','PLAYER','ORGANIZER','PLAYER'];
  $genders=['MALE','FEMALE','OTHER','UNKNOWN','MALE','FEMALE','OTHER','UNKNOWN','MALE','FEMALE'];
  $hash=password_hash('Password123!', PASSWORD_BCRYPT);
  for($i=1;$i<=10;$i++){
    $d=$b->modify('-'.(30-$i).' days');
    $c->insert('users',[
      'user_id'=>$i,'username'=>sprintf('user_%02d',$i),'email'=>sprintf('user%02d@pulse.test',$i),'password_hash'=>$hash,'role'=>$roles[$i-1],'display_name'=>sprintf('User %02d',$i),'bio'=>sprintf('Profil test %02d',$i),'phone'=>sprintf('+2165000%04d',$i),'country'=>'Tunisia','birth_date'=>$D($b->modify('-'.(9000+$i*100).' days')),'gender'=>$genders[$i-1],'email_verified'=>$i<=8?1:0,'is_active'=>1,'last_login_at'=>$T($b->modify('-'.$i.' hours')),'profile_image_id'=>null,'created_at'=>$T($d),'updated_at'=>$T($d->modify('+2 hours')),'reset_password_token_hash'=>null,'reset_password_expires_at'=>null
    ]);
  }

  for($i=1;$i<=10;$i++){
    $p=__DIR__.sprintf('/../public/uploads/seeds/seed_%02d.jpg',$i);
    $c->insert('images',['image_id'=>$i,'file_url'=>sprintf('uploads/seeds/seed_%02d.jpg',$i),'mime_type'=>'image/jpeg','size_bytes'=>is_file($p)?filesize($p):0,'width'=>1200,'height'=>800,'alt_text'=>sprintf('Seed %02d',$i),'uploaded_by_user_id'=>$i,'created_at'=>$T($b->modify('-'.(10-$i).' days'))]);
    $c->update('users',['profile_image_id'=>$i],['user_id'=>$i]);
  }

  $cats=['FPS','MOBA','Battle Royale','Sports','Racing','Fighting','RTS','Card Game','MMORPG','Simulation'];
  $games=['Valorant','League of Legends','Fortnite','EA FC 26','Gran Turismo 7','Street Fighter 6','StarCraft II','Hearthstone','World of Warcraft','Football Manager 2026'];
  for($i=1;$i<=10;$i++){
    $c->insert('categories',['category_id'=>$i,'name'=>$cats[$i-1],'description'=>'Categorie '.$cats[$i-1],'created_at'=>$T($b->modify('-'.(40-$i).' days'))]);
    $c->insert('games',['game_id'=>$i,'category_id'=>$i,'name'=>$games[$i-1],'description'=>$games[$i-1].' jeu test','publisher'=>sprintf('Publisher %02d',$i),'cover_image_id'=>$i,'created_at'=>$T($b->modify('-'.(20-$i).' days'))]);
  }

  $fr=[[1,2,'PENDING'],[2,3,'ACCEPTED'],[3,4,'REFUSED'],[4,5,'CANCELLED'],[5,6,'PENDING'],[6,7,'ACCEPTED'],[7,8,'PENDING'],[8,9,'ACCEPTED'],[9,10,'REFUSED'],[10,1,'PENDING']];
  foreach($fr as $k=>$r){[$f,$t,$s]=$r;$d=$b->modify('-'.(9-$k).' days');$c->insert('friend_requests',['request_id'=>$k+1,'from_user_id'=>$f,'to_user_id'=>$t,'status'=>$s,'request_message'=>'Demande '.($k+1),'created_at'=>$T($d),'responded_at'=>$s==='PENDING'?null:$T($d->modify('+6 hours'))]);}
  $fs=[[1,2],[1,3],[1,4],[2,3],[2,4],[3,4],[5,6],[5,7],[6,7],[8,9]];
  foreach($fs as $k=>$r){$c->insert('friendships',['user_id1'=>$r[0],'user_id2'=>$r[1],'created_at'=>$T($b->modify('-'.(15-$k).' days'))]);}

  $vis=['PUBLIC','FRIENDS','TEAM_ONLY'];
  for($i=1;$i<=10;$i++){
    $d=$b->modify('-'.(30-$i).' hours');
    $c->insert('posts',['post_id'=>$i,'author_user_id'=>$i,'content_text'=>'Post demo '.$i,'visibility'=>$vis[($i-1)%3],'is_deleted'=>0,'deleted_at'=>null,'created_at'=>$T($d),'updated_at'=>$T($d->modify('+15 minutes'))]);
    $c->insert('post_images',['post_id'=>$i,'image_id'=>$i,'position'=>1]);
  }

  $cm=[[1,1,2,null],[2,1,3,1],[3,2,4,null],[4,2,5,3],[5,3,6,null],[6,4,7,null],[7,5,8,null],[8,6,9,null],[9,7,10,null],[10,8,1,null]];
  foreach($cm as $r){[$id,$p,$a,$par]=$r;$d=$b->modify('-'.(40-$id).' hours');$c->insert('comments',['comment_id'=>$id,'post_id'=>$p,'author_user_id'=>$a,'parent_comment_id'=>$par,'content_text'=>'Commentaire '.$id,'is_deleted'=>0,'created_at'=>$T($d),'updated_at'=>$T($d->modify('+10 minutes'))]);}
  $likes=[[1,3],[1,4],[2,5],[3,6],[4,7],[5,8],[6,9],[7,10],[8,1],[9,2]];
  foreach($likes as $k=>$r){$c->insert('post_likes',['post_id'=>$r[0],'user_id'=>$r[1],'created_at'=>$T($b->modify('-'.(20-$k).' hours'))]);}

  for($i=1;$i<=10;$i++){
    $s=$i; $rc=$i===10?1:$i+1; $d=$b->modify('-'.(10-$i).' hours');
    $c->insert('messages',['message_id'=>$i,'sender_user_id'=>$s,'receiver_user_id'=>$rc,'body_text'=>'Message '.$i,'created_at'=>$T($d),'is_read'=>$i%2,'read_at'=>$i%2?$T($d->modify('+5 minutes')):null,'is_deleted_by_sender'=>0,'is_deleted_by_receiver'=>0]);
  }

  $nt=['FRIEND_REQUEST','TEAM_INVITE','TEAM_JOIN_RESPONSE','NEW_MESSAGE','TOURNAMENT_REQUEST_STATUS','ORDER_STATUS'];
  for($i=1;$i<=10;$i++){
    $d=$b->modify('-'.(12-$i).' hours');
    $c->insert('notifications',['notification_id'=>$i,'user_id'=>$i,'type'=>$nt[($i-1)%count($nt)],'ref_table'=>'tournaments','ref_id'=>$i,'content'=>'Notification '.$i,'is_read'=>$i%2,'read_at'=>$i%2?$T($d->modify('+3 minutes')):null,'created_at'=>$T($d)]);
  }

  $rt=['POST','COMMENT','USER','TEAM'];$rs=['OPEN','IN_REVIEW','CLOSED'];
  for($i=1;$i<=10;$i++){
    $s=$rs[($i-1)%3];
    $c->insert('reports',['report_id'=>$i,'reporter_user_id'=>$i,'target_type'=>$rt[($i-1)%4],'target_id'=>$i,'reason'=>'Signalement '.$i,'status'=>$s,'created_at'=>$T($b->modify('-'.(10-$i).' days')),'handled_by_admin_id'=>$s==='OPEN'?null:1,'handled_at'=>$s==='OPEN'?null:$T($b->modify('-'.(6-$i).' hours')),'admin_note'=>$s==='OPEN'?null:'Traite']);
  }

  $caps=[3,6,2,5,9,4,7,8,10,1];
  for($i=1;$i<=10;$i++){
    $d=$b->modify('-'.(25-$i).' days');
    $c->insert('teams',['team_id'=>$i,'name'=>sprintf('Team Pulse %02d',$i),'description'=>'Equipe '.$i,'region'=>sprintf('Region-%02d',$i),'logo_image_id'=>$i,'captain_user_id'=>$caps[$i-1],'created_at'=>$T($d),'updated_at'=>$T($d->modify('+2 hours'))]);
    $c->insert('team_members',['team_id'=>$i,'user_id'=>$caps[$i-1],'joined_at'=>$T($b->modify('-'.(12-$i).' days')),'is_active'=>1,'left_at'=>null]);
  }

  $st=['PENDING','ACCEPTED','REFUSED','CANCELLED'];
  for($i=1;$i<=10;$i++){
    $cand=(($i+2)%10)+1; $s=$st[($i-1)%4]; $d=$b->modify('-'.(14-$i).' days');
    $c->insert('team_join_requests',['request_id'=>$i,'team_id'=>$i,'user_id'=>$cand,'status'=>$s,'note'=>'Join '.$i,'created_at'=>$T($d),'responded_at'=>$s==='PENDING'?null:$T($d->modify('+5 hours')),'responded_by_captain_id'=>$s==='PENDING'?null:$caps[$i-1]]);
    $inv=(($i+3)%10)+1; $by=$caps[$i-1]; if($inv===$by){$inv=($inv%10)+1;}
    $c->insert('team_invites',['invite_id'=>$i,'team_id'=>$i,'invited_user_id'=>$inv,'invited_by_user_id'=>$by,'status'=>$s,'message'=>'Invite '.$i,'created_at'=>$T($d),'responded_at'=>$s==='PENDING'?null:$T($d->modify('+8 hours'))]);
  }

  for($i=1;$i<=10;$i++){
    $price=number_format(45+($i*5),2,'.',''); $d=$b->modify('-'.(18-$i).' days');
    $c->insert('products',['product_id'=>$i,'team_id'=>$i,'name'=>'Produit '.$i,'description'=>'Produit officiel '.$i,'price'=>$price,'stock_qty'=>20+$i,'sku'=>sprintf('SKU-%04d',$i),'is_active'=>1,'created_at'=>$T($d),'updated_at'=>$T($d->modify('+1 hour'))]);
    $c->insert('product_images',['product_id'=>$i,'image_id'=>$i,'position'=>1]);
    $stc=['OPEN','OPEN','OPEN','OPEN','OPEN','OPEN','LOCKED','LOCKED','ORDERED','ORDERED'];
    $status=$stc[$i-1]; $locked=$status==='OPEN'?null:$T($d->modify('+4 hours'));
    $c->insert('carts',['cart_id'=>$i,'user_id'=>$i,'status'=>$status,'created_at'=>$T($d),'updated_at'=>$T($d->modify('+30 minutes')),'locked_at'=>$locked]);
    $qty=($i%3)+1;
    $c->insert('cart_items',['cart_id'=>$i,'product_id'=>$i,'quantity'=>$qty,'unit_price_at_add'=>$price,'added_at'=>$T($b->modify('-'.(15-$i).' hours')),'updated_at'=>$T($b->modify('-'.(14-$i).' hours'))]);
    $os=['PENDING','PAID','CANCELLED','SHIPPED','DELIVERED','PAID','SHIPPED','DELIVERED','PENDING','PAID'];
    $o=$os[$i-1]; $ps=in_array($o,['PAID','SHIPPED','DELIVERED'])?'PAID':'UNPAID';
    $od=$b->modify('-'.(4-intdiv($i,3)).' days');
    $c->insert('orders',['order_id'=>$i,'order_number'=>sprintf('ORD-2026-%06d',$i),'cart_id'=>$i,'user_id'=>$i,'status'=>$o,'payment_method'=>$i%2===0?'CARD':'CASH','payment_status'=>$ps,'total_amount'=>number_format((45+($i*5))*$qty,2,'.',''),'shipping_address'=>'Adresse '.$i,'phone_for_delivery'=>sprintf('+2162111%04d',$i),'created_at'=>$T($od),'paid_at'=>$ps==='PAID'?$T($od->modify('+2 hours')):null,'shipped_at'=>in_array($o,['SHIPPED','DELIVERED'])?$T($od->modify('+1 day')):null,'delivered_at'=>$o==='DELIVERED'?$T($od->modify('+2 days')):null]);
  }

  $org=[2,5,9,2,5,9,2,5,9,2]; $rq=['PENDING','ACCEPTED','REFUSED','PENDING','ACCEPTED','REFUSED','PENDING','ACCEPTED','REFUSED','PENDING']; $fmt=['BO1','BO3','BO5']; $rm=['OPEN','APPROVAL'];
  for($i=1;$i<=10;$i++){
    $sd=$b->modify('+'.($i*2).' days'); $ed=$sd->modify('+2 days'); $dl=$sd->modify('-3 days'); $s=$rq[$i-1];
    $c->insert('tournament_requests',['request_id'=>$i,'organizer_user_id'=>$org[$i-1],'game_id'=>$i,'title'=>'Tournament Request '.$i,'description'=>'Description request '.$i,'rules'=>'Rules request '.$i,'start_date'=>$D($sd),'end_date'=>$D($ed),'registration_deadline'=>$D($dl),'max_teams'=>8+$i,'format'=>$fmt[($i-1)%3],'registration_mode'=>$rm[($i-1)%2],'prize_pool'=>number_format(500+($i*150),2,'.',''),'prize_description'=>'Prize request '.$i,'status'=>$s,'admin_response_note'=>$s==='PENDING'?null:'Reponse admin','created_at'=>$T($b->modify('-'.(20-$i).' days')),'reviewed_at'=>$s==='PENDING'?null:$T($b->modify('-'.(10-$i).' days')),'reviewed_by_admin_id'=>$s==='PENDING'?null:1,'photo_path'=>sprintf('uploads/seeds/seed_%02d.jpg',$i)]);

    $ts=['DRAFT','OPEN','ONGOING','FINISHED','CANCELLED','OPEN','ONGOING','FINISHED','DRAFT','OPEN'];
    $sd2=$b->modify('+'.(5+$i).' days'); $ed2=$sd2->modify('+3 days'); $dl2=$sd2->modify('-2 days'); $cd=$b->modify('-'.(12-$i).' days');
    $c->insert('tournaments',['tournament_id'=>$i,'organizer_user_id'=>$org[$i-1],'game_id'=>$i,'title'=>'Tournament '.$i,'description'=>'Description tournoi '.$i,'rules'=>'Rules tournoi '.$i,'start_date'=>$D($sd2),'end_date'=>$D($ed2),'registration_deadline'=>$D($dl2),'max_teams'=>8+$i,'format'=>$fmt[($i-1)%3],'registration_mode'=>$rm[($i-1)%2],'prize_pool'=>number_format(1000+($i*200),2,'.',''),'prize_description'=>'Prize tournoi '.$i,'status'=>$ts[$i-1],'created_at'=>$T($cd),'updated_at'=>$T($cd->modify('+3 hours')),'photo_path'=>sprintf('uploads/seeds/seed_%02d.jpg',$i)]);
  }

  $tt=[[1,1,1],[1,2,2],[2,3,1],[2,4,2],[3,5,1],[3,6,2],[4,7,1],[4,8,2],[5,9,1],[5,10,2]];
  foreach($tt as $k=>$r){[$t,$team,$seed]=$r;$d=$b->modify('-'.(5-intdiv($k,2)).' days');$c->insert('tournament_teams',['tournament_id'=>$t,'team_id'=>$team,'status'=>'ACCEPTED','seed'=>$seed,'registered_at'=>$T($d),'decided_at'=>$T($d->modify('+6 hours')),'decided_by_user_id'=>$org[$t-1],'checked_in'=>$k%2,'checkin_at'=>$k%2?$T($d->modify('+12 hours')):null]);}

  $ms=['FINISHED','ONGOING','SCHEDULED','FINISHED','CANCELLED','SCHEDULED','SCHEDULED','ONGOING','FINISHED','SCHEDULED'];
  for($i=1;$i<=10;$i++){
    $c->insert('matches',['match_id'=>$i,'scheduled_at'=>$T($b->modify('+'.$i.' days')),'round_name'=>'Round '.sprintf('%02d',$i),'best_of'=>[1,3,5][($i-1)%3],'status'=>$ms[$i-1],'created_at'=>$T($b->modify('-'.(18-$i).' hours')),'updated_at'=>$T($b->modify('-'.(17-$i).' hours')),'tournament_id'=>$i,'result_submitted_by_user_id'=>$ms[$i-1]==='FINISHED'?$org[$i-1]:null]);
  }
  $mt=[[1,1,2,1],[1,2,1,0],[2,1,null,null],[2,2,null,null],[3,3,null,null],[3,4,null,null],[4,5,2,1],[4,6,0,0],[5,7,null,null],[5,8,null,null]];
  foreach($mt as $r){$c->insert('match_teams',['match_id'=>$r[0],'team_id'=>$r[1],'score'=>$r[2],'is_winner'=>$r[3]]);}  


  $q="SELECT 'users' n,COUNT(*) c FROM users UNION ALL SELECT 'images',COUNT(*) FROM images UNION ALL SELECT 'friend_requests',COUNT(*) FROM friend_requests UNION ALL SELECT 'friendships',COUNT(*) FROM friendships UNION ALL SELECT 'posts',COUNT(*) FROM posts UNION ALL SELECT 'post_images',COUNT(*) FROM post_images UNION ALL SELECT 'comments',COUNT(*) FROM comments UNION ALL SELECT 'post_likes',COUNT(*) FROM post_likes UNION ALL SELECT 'messages',COUNT(*) FROM messages UNION ALL SELECT 'notifications',COUNT(*) FROM notifications UNION ALL SELECT 'reports',COUNT(*) FROM reports UNION ALL SELECT 'teams',COUNT(*) FROM teams UNION ALL SELECT 'team_members',COUNT(*) FROM team_members UNION ALL SELECT 'team_join_requests',COUNT(*) FROM team_join_requests UNION ALL SELECT 'team_invites',COUNT(*) FROM team_invites UNION ALL SELECT 'products',COUNT(*) FROM products UNION ALL SELECT 'product_images',COUNT(*) FROM product_images UNION ALL SELECT 'carts',COUNT(*) FROM carts UNION ALL SELECT 'cart_items',COUNT(*) FROM cart_items UNION ALL SELECT 'orders',COUNT(*) FROM orders UNION ALL SELECT 'categories',COUNT(*) FROM categories UNION ALL SELECT 'games',COUNT(*) FROM games UNION ALL SELECT 'tournament_requests',COUNT(*) FROM tournament_requests UNION ALL SELECT 'tournaments',COUNT(*) FROM tournaments UNION ALL SELECT 'tournament_teams',COUNT(*) FROM tournament_teams UNION ALL SELECT 'matches',COUNT(*) FROM matches UNION ALL SELECT 'match_teams',COUNT(*) FROM match_teams";
  foreach($c->fetchAllAssociative($q) as $r){echo str_pad($r['n'],22)." : ".$r['c'].PHP_EOL;}
} catch (Throwable $e) {
  fwrite(STDERR,'Erreur: '.$e->getMessage().PHP_EOL);
  exit(1);
} finally { $kernel->shutdown(); }





