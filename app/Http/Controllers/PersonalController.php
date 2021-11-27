<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function personal()
    {
        $persons =
        [
            ['Nombre' => 'Kevin',
            'Apellido' => 'Veliz',
            "Contacto"=>'0968144873',
            "Web"=>'https://github.com/KevinVeliz',
            "img"=>'https://avatars.githubusercontent.com/u/65980001?v=4'
            ],

            ["Nombre"=>'Mateo',
            "Apellido"=>'Vera',
            "Contacto"=>'0983484551',
            "Web"=>'https://github.com/Chriss78Vera',
            "img"=>'https://avatars.githubusercontent.com/u/85882973?s=400&u=d67a616f8f725311977c5b922345e36b87024e89&v=4'
        ],
            ["Nombre"=>'Lizbeth',
            "Apellido"=>'García',
            "Contacto"=>'0959735539',
            "Web"=>'https://github.com/Lizg19',
            "img"=>'https://scontent.fuio19-1.fna.fbcdn.net/v/t1.6435-9/100613628_3231500576900329_645429654970171392_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=174925&_nc_ohc=R4CF4TXjJ5EAX942JdR&_nc_ht=scontent.fuio19-1.fna&oh=23aaeb3f96ea0e618dc77c51dfae33cf&oe=61C4FF42'
        ],


        ["Nombre"=>'Erick',
            "Apellido"=>'Andrade',
            "Contacto"=>'0961937000',
            "Web"=>'https://github.com/ErickEpnf18',
            "img"=>'https://avatars.githubusercontent.com/u/66393507?s=400&u=7f9cd59ca9d9a331675e9d99d345942b1859ae6f&v=4'
        ],

        ["Nombre"=>'Jhoana',
                "Apellido"=>'Aucancela',
                "Contacto"=>'0979002546',
                "Web"=>'https://github.com/JhoanaAucancela',
                "img"=>'https://scontent.fuio19-1.fna.fbcdn.net/v/t1.6435-9/131064363_1877336479073174_4260343397085124932_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEssAxq--Sz-LppOpmnwj5CxSLhAfvZfVzFIuEB-9l9XCSEKt20thd9C7tIgPGVo2krfiqm2jMq4Z7WVXqDhA48&_nc_ohc=m6x8Sh2m6zgAX8P96do&_nc_ht=scontent.fuio19-1.fna&oh=7481cac7b3a20919a55365a2f70b9299&oe=61C53CB1'
        ],

        ["Nombre"=>'Alejandro',
                "Apellido"=>'Armas',
                "Contacto"=>'0996356523',
                "Web"=>'https://github.com/alejandroarmas1992',
                "img"=>'https://scontent.fuio19-1.fna.fbcdn.net/v/t1.6435-9/150666307_10219740569726531_4949804636175967425_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEzPdDYNOPBp25czrU7nGVaHLOBa3tN96wcs4Fre033rA-7e55AwZ00rLd1h2o6Krc&_nc_ohc=FkEa9Vvg31MAX9cduYD&_nc_ht=scontent.fuio19-1.fna&oh=6c46fddfd880caef680be4aacaf4234e&oe=61C71B06'
            ],

        ["Nombre"=>'Johan',
        "Apellido"=>'Quinatoa',
        "Contacto"=>'',
        "Web"=>'',
        "img"=>''
        ]

    ];


        return view('personal',compact('persons'));
    }
}
