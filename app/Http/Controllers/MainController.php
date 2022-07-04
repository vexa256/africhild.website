<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use DB;

class MainController extends Controller
{

    private $Title = "The AfriChild Centre exists to generate research that informs policy and practice for the wellbeing of children. Vision - We strive for an Africa where children\'s wellbeing is realized for sustainable development.  ";

    public function __construct()
    {
        // // dd($_SERVER['SERVER_NAME']);
        // SitemapGenerator::create('http://africhild.or.ug')->writeToFile(public_path('sitemap.xml
        // '));

    }

    public function RunSEO($PageTitle, $Desc = null)
    {
        SEOTools::setTitle($PageTitle);

        if ($Desc == null) {
            SEOTools::setDescription($this->Title);
        } else {

            SEOTools::setDescription($Desc);
        }

        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@AfriChildCenter');
        SEOTools::jsonLd()->addImage(url('img/logo.png'));
    }

    public function Afri_Child_Center_Makerere()
    {
        $this->RunSEO('The AfriChild Center Makerere');
        $data = [

            // "Page"  => '',
            "Title" => '',

        ];

        return view('view', $data);
    }

    public function AboutTheAfriChildCenterMakerere()
    {
        $this->RunSEO('About The AfriChild Center Makerere');

        $data = [

            "Page"  => 'about.About',
            "Title" => 'About The AfriChild Center Makerere',

        ];

        return view('view', $data);
    }

    public function OurWorkAtAfriChildCenterMakerere(Type $var = null)
    {
        $this->RunSEO("Explore AfriChild\'s Work and Projects");

        $OurWork = DB::table('our_works')->get();
        $data    = [

            "Page"    => 'work.Work',
            "Title"   => 'Our Work - AfriChild Center Makerere',
            "OurWork" => $OurWork,

        ];

        return view('view', $data);
    }

    public function TheAfriChildCenterBoardOfDirectors(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - Board Of Directors");

        $Directors = DB::table('directors')->get();
        $data      = [

            "Page"      => 'directors.Directors',
            "Title"     => 'Board of Directors - AfriChild Center Makerere',
            "Directors" => $Directors,

        ];

        return view('view', $data);
    }

    public function TheAfriChildSecretariatTeam(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - The Secretariat Team ");

        $GlobalData = DB::table('sec_teams')->get();
        $data       = [

            "Page"       => 'secretariat.Secretariat',
            "Title"      => 'The Secretariat Team - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function TheAfriChildCoreProgramAreas(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - Our Core Program Areas ");

        $GlobalData = DB::table('program_areas')->get();
        $data       = [

            "Page"       => 'CoreProgram.CoreProgramAreas',
            "Title"      => 'Core Program Areas- AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function AfriChildFounders(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - Our Founders ");

        $GlobalData = DB::table('founders')->get();
        $data       = [

            "Page"       => 'founders.Founders',
            "Title"      => 'Our Founders- AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function AfriChildCenterMakerereResearchAssociates(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - Our Research Associates");

        $GlobalData = DB::table('assocs')->get();
        $data       = [

            "Page"       => 'associates.Associates',
            "Title"      => 'Our Research Associates - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function AfriChildCenterMakerereAffiliates(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - Our Affiliates");

        $GlobalData = DB::table('affs')->get();
        $data       = [

            "Page"       => 'affiliates.Affiliates',
            "Title"      => 'Our Affiliates - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function AfriChildPromotingPartners(Type $var = null)
    {
        $this->RunSEO("AfriChild Center Makerere - Our Promoting Partners");

        $GlobalData = DB::table('partners')->get();
        $data       = [

            "Page"       => 'partners.Partners',
            "Title"      => 'Our Promoting Partners - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);

    }

    public function AfriChildResearchPublications()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Research");

        $GlobalData = DB::table('research')->get();
        $data       = [

            "Page"       => 'research.Research',
            "Title"      => 'Our Research - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);

    }

    public function AfriChildCenterReports()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Reports");

        $GlobalData = DB::table('reports')->get();
        $data       = [

            "Page"       => 'report.Reports',
            "Title"      => 'Our Reports - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function AfriChildCenterPolicyBriefs()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Policy Briefs");

        $GlobalData = DB::table('policies')->get();
        $data       = [

            "Page"       => 'policy.Policy',
            "Title"      => 'Policy Briefs - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('view', $data);
    }

    public function AfriChildCenterGallery()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Pictorial");

        $GlobalData = DB::table('galleries')->get();
        $data       = [

            "Page"       => 'gallery.Gallery',
            "Title"      => 'Gallery - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,
            "Photo"      => 'true',

        ];

        return view('view', $data);
    }

    public function AfriChildCenterBlogPosts()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Blog");

        $GlobalData = DB::table('blogs')->orderBy('id', 'desc')->get();
        $News       = DB::table('news')->orderBy('id', 'desc')->get();
        $data       = [

            "Page"       => 'blog.Posts',
            "Title"      => 'Blog Posts - AfriChild Center Makerere',
            "GlobalData" => $GlobalData->shuffle(),
            "News"       => $News,
            // "Photo"      => 'true',

        ];

        return view('view', $data);
    }

    public function AfriChildBlogPostDetails($AfriChildBlogPost)
    {
        $GlobalData = DB::table('blogs')
            ->where('AfriChildBlogPost', $AfriChildBlogPost)->first();

        $this->RunSEO("Blog Post | " . $GlobalData->Title);

        $data = [

            "Page"       => 'blog.Details',
            "Title"      => "Blog Post | " . $GlobalData->Title,
            "GlobalData" => $GlobalData,
            // "News"       => $News,
            // "Photo"      => 'true',

        ];

        return view('view', $data);
    }

    public function AfriChildBlogNewsDetails($id)
    {
        $GlobalData = DB::table('news')
            ->where('id', $id)->first();

        $this->RunSEO("News Post | " . $GlobalData->Title);

        $data = [

            "Page"       => 'news.Details',
            "Title"      => "News Post | " . $GlobalData->Title,
            "GlobalData" => $GlobalData,
            // "News"       => $News,
            // "Photo"      => 'true',

        ];

        return view('view', $data);
    }

}
