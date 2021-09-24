<?php 
$year = date('Y');
return [
	
	"security"=>[
		'header'=>'SECURE SHOPPING',
		'desc'=>'This site is protected by 128 BIT SSL system.',
	],
	
	'legal_links'=>[
		'terms'=>['title'=>'Terms and Conditions of Use','link'=>'legal/terms-and-conditions'],
		'info'=>['title'=>'Website User Clarification Text','link'=>'legal/website-user-lighting-text'],
		'privacy'=>['title'=>'Privacy Policy','link'=>'legal/privacy-policy'],
		'cookies'=>['title'=>'Cookie Clarification Text','link'=>'legal/cookie-lighting-text'],
	],
	
	'copyright'=>"© $year Actifit Spor ve Sağlık Hizmetleri Sanayi ve Tic. A.Ş. All rights reserved.",

	"social_media"=>[
		'title'=>'Follow us',
		'accounts'=>[

			"facebook"=>[
				'icon'=>'footer/social-media/facebook.png',
				'title'=>'Facebook',
				'link'=>'https://www.facebook.com/kizlarsahada?fref=ts'
			],		
			"twitter"=>[
				'icon'=>'footer/social-media/twitter.png',
				'title'=>'Twitter',
				'link'=>'https://twitter.com/kizlarsahada'
			],		
			"instagram"=>[
				'icon'=>'footer/social-media/instagram.png',
				'title'=>'Instagram',
				'link'=>'http://instagram.com/kizlarsahada'
			],		
			"youtube"=>[
				'icon'=>'footer/social-media/youtube.png',
				'title'=>'Youtube',
				'link'=>'https://www.youtube.com/channel/UCdHt7LE3iqrFInY0I0Ekz2w'
			],		
			"linkedin"=>[
				'icon'=>'footer/social-media/linkedin.png',
				'title'=>'Linkedin',
				'link'=>'https://tr.linkedin.com/company/k%C4%B1zlar-sahada'
			],		
		],
	]
];








