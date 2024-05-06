<?php

namespace App\Controllers;

class Page extends BaseController
{
    public $events = [
        [
            'title' => 'Indonesia Website Awards x WebDevTalk 2024',
            'price' => 'IDR 150.000',
            'date' => '2023-11-15',
            'time' => '10:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F733429309%2F198448064088%2F1%2Foriginal.20240402-081619?w=940&auto=format%2Ccompress&q=75&sharp=10&s=b06ffde6de6021e37efaa491b78411ec',
            'description' => 'Ajang tahunan bergengsi persembahan Exabytes Indonesia yang palingbanyak ditunggu oleh para insan pemilik website dan web developer.',
            'participants' => 3600,
            'capacity' => 4000,
            'organizer' => 'Exabytes Indonesia'
        ],
        [
            'title' => 'KERAMIKA Indonesia (KMI)',
            'price' => '0',
            'date' => '2024-05-09',
            'time' => '10:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F531797039%2F287155506737%2F1%2Foriginal.20230608-080808?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C270%2C1080%2C540&s=1fd97eda2c18ce28a1e9450f0b20d699',
            'description' => 'KERAMIKA INDONESIA akan mendatangkan produk-produk dari produsen keramik dan pemasok bahan baku, peralatan, dan mesin, ke salah satu KONSUMEN UBIN KERAMIK & SANITER TERBESAR DI ASIA TENGGARA, INDONESIA.',
            'participants' => 2500,
            'capacity' => 3200,
            'organizer' => 'Panorama Media'
        ],
        [
            'title' => 'Meet & Greet Jakarta Event',
            'price' => '0',
            'date' => '2024-05-11',
            'time' => '11:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F751772579%2F1399154297093%2F1%2Foriginal.20240424-215428?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C115%2C954%2C477&s=1dbb9c30958540a9f552975a630f94bc',
            'description' => 'Meet & greet with the Neumi Founder, Steven Scott and the President & CEO, Aaron Rennert.',
            'participants' => 1200,
            'capacity' => 2000,
            'organizer' => 'Neumi Corporate Office'
        ],
        [
            'title' => 'MACHINEX INDONESIA 2024 - MACHINERY EXPO',
            'price' => '0',
            'date' => '2024-06-04',
            'time' => '10:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F751063489%2F2118415395983%2F1%2Foriginal.20240424-065616?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=449e085aa10b32ec58066902f7e8032d',
            'description' => 'MACHINEX INDONESIA 2024 - MACHINERY EXPO adalah pameran mesin terbesar di Indonesia tahun ini! Ayo datang dan lihat teknologi terbaru!',
            'participants' => 1000,
            'capacity' => 1500,
            'organizer' => 'PT. Meorient Exhibition International'
        ],
        [
            'title' => 'CEO Speaks with Hero Supermarket',
            'price' => '0',
            'date' => '2024-05-07',
            'time' => '21:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F757756129%2F155461018492%2F1%2Foriginal.20240502-105642?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C608%2C8040%2C4020&s=a2f98866568bac0e177c480c7ef0eb56',
            'description' => 'BINUS Business School proudly presents CEO Speaks with HERO Supermarket! We will discuss about business transformation in retail industry.',
            'participants' => 800,
            'capacity' => 1000,
            'organizer' => 'BINUS BUSINESS SCHOOL'
        ],
        [
            'title' => 'THE PURSUIT OF PEACE: Introduction to Islam',
            'price' => '0',
            'date' => '2024-05-12',
            'time' => '05:00:00',
            'location' => 'Online',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F109221537%2F5107025675%2F1%2Foriginal.jpg?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C10%2C720%2C360&s=5da29b6a4b877bdb1ca9368b69510ae0',
            'description' => 'During these challenging times, it is important to keep your faith in God strong and focus on what really matters in your life.',
            'participants' => 300,
            'capacity' => 500,
            'organizer' => 'American Islam'
        ],
        [
            'title' => 'Agent Workshop with ACU - JAKARTA',
            'price' => '0',
            'date' => '2024-95-13',
            'time' => '10:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F754649039%2F272141055170%2F1%2Foriginal.20240429-084044?w=940&auto=format%2Ccompress&q=75&sharp=10&s=0ef1a0760e2960ee9f6be5eb558162ba',
            'description' => 'Join us for a hands-on Agent Workshop with ACU to learn all the latest market insights!',
            'participants' => 100,
            'capacity' => 300,
            'organizer' => 'Yes Education'
        ],
        [
            'title' => 'Algorythm™️| Intro to Machine Learning',
            'price' => 'IDR 12.000.000',
            'date' => '2024-05-12',
            'time' => '19:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F351891579%2F262347974128%2F1%2Foriginal.20220727-130048?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C98%2C1920%2C960&s=417441406de01eb956cbd065b77351bf',
            'description' => 'Predicting the future is not magic, it is artificial intelligence. – Dave Waters',
            'participants' => 1100,
            'capacity' => 1500,
            'organizer' => 'Kat Usop, MSHI'
        ],
        [
            'title' => 'How to Navigate a Toxic Workplace',
            'price' => 'IDR 400.000',
            'date' => '2024-05-21',
            'time' => '18:00:00',
            'location' => 'Online',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F708188249%2F63677645%2F1%2Foriginal.20240229-125542?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=a80d3e6ac0b9528ae1f6bdd13ebefb70',
            'description' => 'Professor Connson Locke examines the different strategies we can adopt when mistrust is high and collaboration is not happening.',
            'participants' => 670,
            'capacity' => 1000,
            'organizer' => 'Sensible Media Ltd'
        ],
        [
            'title' => 'School attendance register: attendance and absence codes',
            'price' => '0',
            'date' => '2024-05-22',
            'time' => '21:30:00',
            'location' => 'Online',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F741088599%2F1865650531313%2F1%2Foriginal.20240411-094535?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=e5f70c0bfa699b3d17b4c2a8b459b3ce',
            'description' => 'Part of a series of webinars to assist schools, trusts and LAs in introducing the updated Working together to improve attendance guidance',
            'participants' => 400,
            'capacity' => 200,
            'organizer' => 'DfE Live Events'
        ],
        [
            'title' => 'The European AI Conference 2024',
            'price' => '0',
            'date' => '2024-05-16',
            'time' => '16:00:00',
            'location' => 'Online',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F735570109%2F257848869318%2F1%2Foriginal.20240404-101559?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=b0cd40a6cd3d3c5564a08f35957bcc91',
            'description' => 'Hosted from Googles European HQ, The European AI Conference 2024 is a hybrid event gathering 1,500 Founders, Investors, and more.',
            'participants' => 800,
            'capacity' => 1000,
            'organizer' => 'Startup Network Europe'
        ],
        [
            'title' => 'How to Say No and Feel Good About It',
            'price' => 'IDR 120.000',
            'date' => '2024-05-17',
            'time' => '12:00:00',
            'location' => 'Surabaya',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F566309709%2F653875308993%2F1%2Foriginal.20230801-164055?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C9000%2C4500&s=6969e038da0fe034bbd430d3ed132542',
            'description' => 'Healthy Minds @Work Learning Lab-How to Say No and Feel Good About It',
            'participants' => 200,
            'capacity' => 400,
            'organizer' => 'Healthy Minds Innovations, Inc.'
        ],
        [
            'title' => 'The Science of Reading Fluency',
            'price' => 'IDR 200.000',
            'date' => '2024-05-12',
            'time' => '12:00:00',
            'location' => 'Bandung',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F737096279%2F325006767745%2F1%2Foriginal.20240404-200533?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=190%2C164%2C858%2C429&s=5452b8ef049ba627a5b65a1576e2535b',
            'description' => 'Dr. Jan Hasbrouck will present The Science of Readig Fluency on May 11, 2024, at 10:00 a.m. PDT.',
            'participants' => 500,
            'capacity' => 600,
            'organizer' => 'Read Washington'
        ],
        [
            'title' => 'Green Drinks Jakarta Talk & Social',
            'price' => '0',
            'date' => '2024-05-09',
            'time' => '12:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F758555679%2F311892386212%2F1%2Foriginal.20240503-045714?w=940&auto=format%2Ccompress&q=75&sharp=10&s=40dd0d9f6543e4af25b324bd5319d051',
            'description' => 'Come to free networking event for professionals who cares about the world and environment but likes to mingle and party.',
            'participants' => 200,
            'capacity' => 300,
            'organizer' => 'Green Drinks Jakarta'
        ],
        [
            'title' => 'Monash University Info Day',
            'price' => 'IDR 120.000',
            'date' => '2024-05-12',
            'time' => '12:00:00',
            'location' => 'Jakarta',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F746558339%2F235907205338%2F1%2Foriginal.20240418-093353?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=e4622419f86715fc37e4bd1cc3885edb',
            'description' => 'Healthy Minds @Work Learning Lab-How to Say No and Feel Good About It',
            'participants' => 200,
            'capacity' => 400,
            'organizer' => 'SUN Education Group'
        ],
        [
            'title' => 'How to Say No and Feel Good About It',
            'price' => 'IDR 120.000',
            'date' => '2024-05-17',
            'time' => '12:00:00',
            'location' => 'Surabaya',
            'image' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F566309709%2F653875308993%2F1%2Foriginal.20230801-164055?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C9000%2C4500&s=6969e038da0fe034bbd430d3ed132542',
            'description' => 'Healthy Minds @Work Learning Lab-How to Say No and Feel Good About It',
            'participants' => 200,
            'capacity' => 400,
            'organizer' => 'Healthy Minds Innovations, Inc.'
        ]
    ];

    public $organizers = [
        [
            'name' => 'SUN Education Group',
            'followers' => 10000,
            'total_events' => 15,
            'avatar' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F62923066%2F220930487068%2F1%2Foriginal.jpg?w=225&auto=format%2Ccompress&q=75&sharp=10&s=0d48b3765a1e2670c757880a09c60fbe'
        ],
        [
            'name' => 'Neumi Corporate Office',
            'followers' => 5000,
            'total_events' => 10,
            'avatar' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F448813439%2F1399154297093%2F1%2Foriginal.20230217-172429?w=225&auto=format%2Ccompress&q=75&sharp=10&s=bc70fa81d796f2b17979502169c6cd0a'
        ],
        [
            'name' => 'IALF Global',
            'followers' => 2250,
            'total_events' => 11,
            'avatar' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F616057779%2F307432858516%2F1%2Foriginal.20231009-063338?w=407&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C407%2C407&s=8b1775bb930266a57df009ddd3feadf6'
        ],
        [
            'name' => 'Tech in Asia',
            'followers' => 6000,
            'total_events' => 283,
            'avatar' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F58788164%2F22530358194%2F2%2Foriginal.png?w=225&auto=format%2Ccompress&q=75&sharp=10&s=734afd0698e1d30838021d12a3f00846'
        ],
        [
            'name' => 'U.S. Patent and Trademark Office',
            'followers' => 11000,
            'total_events' => 367,
            'avatar' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F144927131%2F335969134893%2F1%2Foriginal.20210818-183139?w=512&auto=format%2Ccompress&q=75&sharp=10&rect=776%2C789%2C4690%2C4690&s=2604f6d67166a332fdbef0dcbb4c2329'
        ],
        [
            'name' => 'TAK Games Pty Ltd',
            'followers' => 1800,
            'total_events' => 183,
            'avatar' => 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F45926532%2F218062284213%2F2%2Foriginal.png?h=65&auto=format%2Ccompress&q=75&sharp=10&s=dcd902b16cabf83c0f8f343a11b0f671'
        ],
    ];

    public $destinations = [
        [
            'name' => 'Jakarta',
            'image' => 'https://images.unsplash.com/photo-1590930754517-64d5fffa06ac?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8amFrYXJ0YXxlbnwwfHwwfHx8MA%3D%3D',
            'followers' => 3500,
        ],
        [
            'name' => 'Bekasi',
            'image' => 'https://images.unsplash.com/photo-1594736881855-39efca4a3922?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'followers' => 2400,
        ],
        [
            'name' => 'Bandung',
            'image' => 'https://images.unsplash.com/photo-1613057263089-7a8c82f2825d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'followers' => 10000,
        ],
        [
            'name' => 'Yogyakarta',
            'image' => 'https://plus.unsplash.com/premium_photo-1700955004555-900a9733ee14?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'followers' => 1300,
        ],
        [
            'name' => 'Surabaya',
            'image' => 'https://images.unsplash.com/photo-1566176553949-872b2a73e04e?q=80&w=1885&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'followers' => 850,
        ],
        [
            'name' => 'Solo',
            'image' => 'https://plus.unsplash.com/premium_photo-1700954929488-82c05cebb075?q=80&w=1856&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'followers' => 850,
        ],
    ];

    public $searchs = [
        [
            'search' => 'Seminar',
            'color' => 'bg-blue-400',
            'count' => '20',
        ],
        [
            'search' => 'Webinar',
            'color' => 'bg-purple-400',
            'count' => '15',
        ],
        [
            'search' => 'Workshop',
            'color' => 'bg-green-400',
            'count' => '25',
        ],
        [
            'search' => 'Konferensi',
            'color' => 'bg-orange-400',
            'count' => '18',
        ],
        [
            'search' => 'Training',
            'color' => 'bg-yellow-400',
            'count' => '20',
        ],
        [
            'search' => 'Expo',
            'color' => 'bg-pink-400',
            'count' => '12',
        ],
        [
            'search' => 'Exhibition',
            'color' => 'bg-indigo-400',
            'count' => '15',
        ],
        [
            'search' => 'Conference',
            'color' => 'bg-red-400',
            'count' => '22',
        ],
        [
            'search' => 'Symposium',
            'color' => 'bg-teal-400',
            'count' => '10',
        ],
        [
            'search' => 'Meetup',
            'color' => 'bg-emerald-400',
            'count' => '15',
        ],
        [
            'search' => 'Festival',
            'color' => 'bg-lime-400',
            'count' => '20',
        ],
        [
            'search' => 'Conclave',
            'color' => 'bg-amber-400',
            'count' => '25',
        ],
        [
            'search' => 'Forum',
            'color' => 'bg-fuchsia-400',
            'count' => '22',
        ],
        [
            'search' => 'Talkshow',
            'color' => 'bg-violet-400',
            'count' => '15',
        ],
        [
            'search' => 'Webinar Series',
            'color' => 'bg-fuchsia-500',
            'count' => '10',
        ],
        [
            'search' => 'Conference Series',
            'color' => 'bg-cyan-400',
            'count' => '20',
        ],
        [
            'search' => 'Online Event',
            'color' => 'bg-gray-400',
            'count' => '15',
        ],
        [
            'search' => 'Panel Discussion',
            'color' => 'bg-blue-500',
            'count' => '25',
        ],
        [
            'search' => 'Experience Talk',
            'color' => 'bg-green-500',
            'count' => '10',
        ],
        [
            'search' => 'Product Launching',
            'color' => 'bg-red-500',
            'count' => '15',
        ],
        [
            'search' => 'Industry Trend',
            'color' => 'bg-yellow-500',
            'count' => '20',
        ],
    ];

    public function signup()
    {
        $data = [
            'title' => 'Sign Up | Eventiqo'
        ];

        return view('auth/signup', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Eventiqo'
        ];

        return view('auth/login', $data);
    }

    public function home()
    {
        $data = [
            'title' => 'Home | Eventiqo',
            'events' => $this->events,
            'organizers' => $this->organizers,
            'destinations' => $this->destinations,
            'searchs' => $this->searchs
        ];

        return view('pages/home', $data);
    }

    public function explore()
    {
        $data = [
            'title' => 'Explore | Eventiqo',
            'events' => $this->events,
            'organizers' => $this->organizers,
            'destinations' => $this->destinations,
            'searchs' => $this->searchs
        ];

        return view('pages/explore', $data);
    }
}
