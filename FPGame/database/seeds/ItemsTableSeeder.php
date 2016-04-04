<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DB::table('items')
    		->insert([
    				'type_id'=> '2',
    				'name'=> 'MyPistol',
    				'capacity' => '20',
    				'value' => '4',
    				'price' => '3',
    				'payed' => '0',
    				'description' => 'Your default gun',
    				'image' => 'https://www.google.bg/imgres?imgurl=http://www.ownedcssclan.8m.com/images/usp_tact_a.jpg&imgrefurl=http://www.ownedcssclan.8m.com/photo.html&h=236&w=315&tbnid=ipw26vF149Wv1M:&docid=zBeDJ-HNR4vodM&ei=mRz9VsyKEIKk6ASdzLa4Bw&tbm=isch&ved=0ahUKEwiMu4bt-urLAhUCEpoKHR2mDXcQMwghKAcwBw#h=236&w=315'
    		]);
    	
    	
        DB::table('items')
        	->insert([
        			'type_id'=> '1',
        			'name'=> 'Bullet',
        			'capacity' => '0',
        			'value' => '0',
        			'price' => '3',
        			'payed' => '0',
        			'description' => '',
        			'image' => 'https://www.google.bg/imgres?imgurl=http://nobacks.com/wp-content/uploads/2014/11/Bullets-19.png&imgrefurl=http://nobacks.com/keywords/bullet/&h=270&w=256&tbnid=ZWew9Y3BnVzEDM:&docid=EaG5vaCKx7TOIM&ei=qR79Vpe4CKKE6QTdhLXQDw&tbm=isch&ved=0ahUKEwjXsOHo_OrLAhUiQpoKHV1CDfo4ZBAzCDgoNTA1#h=270&imgdii=ZWew9Y3BnVzEDM%3A%3BZWew9Y3BnVzEDM%3A%3BmyGB2vG7It7InM%3A&w=256'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '1',
        			'name'=> 'GoldBullet',
        			'capacity' => '0',
        			'value' => '4',
        			'price' => '6',
        			'payed' => '1',
        			'description' => 'With GoldBullet you can cause more damage to the enemy',
        			'image' => 'https://www.google.bg/imgres?imgurl=http://nobacks.com/wp-content/uploads/2014/11/Bullets-19.png&imgrefurl=http://nobacks.com/keywords/bullet/&h=270&w=256&tbnid=ZWew9Y3BnVzEDM:&docid=EaG5vaCKx7TOIM&ei=qR79Vpe4CKKE6QTdhLXQDw&tbm=isch&ved=0ahUKEwjXsOHo_OrLAhUiQpoKHV1CDfo4ZBAzCDgoNTA1#h=270&w=256'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '3',
        			'name'=> 'SmokeGranade',
        			'capacity' => '0',
        			'value' => '0',
        			'price' => '300',
        			'payed' => '0',
        			'description' => 'Can be use to provide temporary covor for moving from place to place. Make you invisible for 10 sec',
        			'image' => 'http://cka4atcs.ru/csimg/4169b89aa6d8dc24e85ec7621f516894.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '3',
        			'name'=> 'Granade',
        			'capacity' => '0',
        			'value' => '30',
        			'price' => '400',
        			'payed' => '0',
        			'description' => 'A high-explosive device. Damage 30.',
        			'image' => 'http://cka4atcs.ru/csimg/582b9aad4bb9f6a81738adf40639f923.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> '9X19MM SIDEARM',
        			'capacity' => '20',
        			'value' => '5',
        			'price' => '400',
        			'payed' => '0',
        			'description' => 'The perfect weapon for beginners.',
        			'image' => 'http://csrush.com/files/imagecache/in_post/files/glock.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> '228 COMPACT',
        			'capacity' => '25',
        			'value' => '6',
        			'price' => '600',
        			'payed' => '0',
        			'description' => 'It is a moderately powerful semi-automatic pistol',
        			'image' => 'http://2.bp.blogspot.com/_Mw1mvZxj_Sw/TI5WJU6oqDI/AAAAAAAAAAk/5f-dnU1vTw8/s1600/228+ccompact.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> 'CV 47',
        			'capacity' => '40',
        			'value' => '8',
        			'price' => '900',
        			'payed' => '0',
        			'description' => 'It is one of the most powerful guns in the game known for its power and its range.',
        			'image' => 'http://guides.freddyshouse.com/cs/weapons/images/mp5_a.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> 'M249',
        			'capacity' => '50',
        			'value' => '10',
        			'price' => '1300',
        			'payed' => '0',
        			'description' => '',
        			'image' => 'http://static2.cs-bg.net/images/articles/m249.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '4',
        			'name'=> 'ExtraLife10%',
        			'capacity' => '0',
        			'value' => '10',
        			'price' => '1500',
        			'payed' => '0',
        			'description' => 'Gives you 10% extra life',
        			'image' => 'http://dizma.net/image/data/10-percent.png'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '4',
        			'name'=> 'ExtraLife15%',
        			'capacity' => '0',
        			'value' => '15',
        			'price' => '2000',
        			'payed' => '0',
        			'description' => 'Gives you 15% extra life',
        			'image' => 'http://bbj.hu/images2/201311/15-percentjp_20131115091018412.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> 'Leone YG1265',
        			'capacity' => '50',
        			'value' => '15',
        			'price' => '4.99',
        			'payed' => '1',
        			'description' => 'The Leone YG1265 is a very powerful shotgun. It is very effective in long distance combat. ',
        			'image' => 'http://store4.data.bg/cstrikeleet/images2/p90.jpg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> 'D3-AU1',
        			'capacity' => '100',
        			'value' => '18',
        			'price' => '7.99',
        			'payed' => '1',
        			'description' => 'Very powerful weapon. With it you can kill eemy from very long distance',
        			'image' => 'https://www.google.bg/imgres?imgurl=http://a3.mzstatic.com/us/r30/Purple2/v4/cc/4e/f4/cc4ef493-2ac6-17e9-0c5f-840a95cc9697/screen480x480.jpeg&imgrefurl=https://itunes.apple.com/us/app/guns-for-cs/id460382717?mt%3D8&h=360&w=480&tbnid=_GEy8gbrgTRITM:&docid=n-halH9TAvu51M&ei=6KX_VvqOMePM6AT2yI_QDQ&tbm=isch&ved=0ahUKEwj6os6K5u_LAhVjJpoKHXbkA9oQMwgpKA4wDg#h=360&imgdii=_GEy8gbrgTRITM%3A%3B_GEy8gbrgTRITM%3A%3BbPWFjI621aezaM%3A&w=480'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '5',
        			'name'=> 'Premium account',
        			'capacity' => '0',
        			'value' => '14',
        			'price' => '9.99',
        			'payed' => '1',
        			'description' => 'Premium account for 14 days.',
        			'image' => 'http://www.fastandyou.com/uploads/2/3/6/2/23620028/s782333958681989678_p5_i1_w400.jpeg'
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '5',
        			'name'=> 'Premium account',
        			'capacity' => '0',
        			'value' => '7',
        			'price' => '4,99',
        			'payed' => '1',
        			'description' => 'Premium account for 7 days',
        			'image' =>'http://www.fastandyou.com/uploads/2/3/6/2/23620028/s782333958681989678_p5_i1_w400.jpeg'
        	]);
    }
}
