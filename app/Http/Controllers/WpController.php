<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Corcel\Model\Taxonomy;
use Illuminate\Support\Str;


class WpController extends Controller
{
    public function index()
    {
        $excludedPostNames = ['navigation', 'wp-global-styles-twentytwentythree', 'wp-global-styles-twentytwentytwo', 'halo-dunia', 'header', 'laman-contoh', 'wp-global-styles-tailpress', 'beranda-blog', 'home',
            //New WP Block
            'c5dd36b07fe6659a334aa6aaba8dbdf3', '2185cac48683b97d3194a005c3add545', 'd2902a753ad90c36e722b3bc568ca9d5', 'f7a4c38341138bd8e210f70cc76268ee', '6a34897ff460ecb9c4e8a866be523085', 'a25898ab82b6986df0b2049df53241d5', 'wp-global-styles-twentytwentyfour', '4-revision-v1', 'home', 'footer', '8287-revision-v1', 'header', 'cbe6c65c08cfe183a246ea3c1fdd33e7', '0a84e5fb6858257977c16b87542b64fb', '7cdb421613db6fedbb18996c88894b62', '80b88378f4a9b6b3cdf9e74bd5ca14bb', 'b579aa7aebaf64cc59efead88cf1b510', '80b606c5e97649704b875f247c514d8c', '2ee8a3953255556bcfc162a704e4832c', 'a973584da1f1ed3e233a0ab217a88eee', '857ea80fb21dd0ed8c2765040f4d8a3d', '1ee0d2a000ae48664dca1bade04c72a5', 'cc194240a5eb8f2bd83defc3b543ed8f', 'd7db4ba5aa45ef4445434ac88e1a6fef', '00eff56bb2e9387e024e10ae9f0e74f0', '7ac12b27c729bc5255f7510581be95a9', '3df00e776e13bd5e5c24f6a83fccad94', 'e734777f153d2090d19eee33e378f30e', '475d23cbdad2a888f08708bb78ac1237', 'd00669b514ed96c496fe0c4177434fd2', 'a4647685a13aae1066ad309bf7c950c3', '8a7aee3367ac0e4fd91e426ea326ccca', 'c1d4006c46510bfe448656815a743db4', 'dc9d946fd66262dbeca093323ba702e8', 'c4ba051f769cf903784bd0dc806ca0ae', '643b1ca96a787370ddb463bb97e48b9d', 'b1c3c8c2db2d6b63e7ccbc0e3362fc23', 'd6d2e2744d73a376a813433ce02f9d5b', 'b9f7fef56654c5bfce32f3b4e15fa847', 'b56d438c89a52a1b9be0614eb3fe13c1', '16954bd9839d38cfd3a9a24d0a076b14', 'bdc522ee85dea364b92850627344522c', 'b7b8f0c6f37accccd9e3d56a46b24382','339879e626ed44cde8909269b67f61c7', '281fe41fac222db1988c71bf5bb2966e', '40ae4e4b037c43533b6dad304a8f10b0', '3d1c09f0e8c6a655480c94fcbe9364de', '994e4285ca1dd0699f1fa42b6162d878', '3c51d446c0611a6d0e1e368e5bc1846e', '695f1fa7f9e01797f0d2efd6b7633dbb', '01f6dcbf8b81a3d01e5616732946ffe8', '43cd4cb42b6c859160cedbd997d36047', '5b4bf248c09af1d84ac46c267fea57ed', '6a07badb4f76f10d604e261c5172134f', '41c0631dfd697172d9ef2d57b49a478d', '4df4d7c7b494041f07319d0a150f1a67', '16b7c5401517168aba9de42d8f1144d8', '8399-revision-v1', 'luchshie-onlajn-stavki-na-sport-a-vysokie-koeffitsienty-1vin-kazin__trashed', '8410-revision-v1', 'the-7-best-roulette-strategies-2024-professional-guid__trashed', 'pin-up-online-casinoya-kaydolun-ve-kisisel-dolabiniza-giris-yapin%ef%b8%8f__trashed', 'o-melhor-cassino-electronic-apostas-esportivas-do-brasil-%e1%90%88-pin-u__trashed', 'glory-gambling-establishment-app-for-mobile-phone-how-to-get-free-of-charge-on-androi__trashed', 'zaklady-mhh-sport-i-esport-u-bukmachera-ggbe__trashed', '%d8%a7%d9%84%d9%85%d8%b1%d8%a7%d9%87%d9%86%d8%a7%d8%aa-%d8%a7%d9%84%d8%b1%d9%8a%d8%a7%d8%b6%d9%8a%d8%a9-%d8%a3%d9%88%d9%86%d9%84%d8%a7%d9%8a%d9%86-1xbet-%e1%90%89-%d8%b4%d8%b1%d9%83%d8%a9__trashed', 'how-to-play-slots-and-win-online-video-poker-machines-guide-strategie__trashed', 'top-100-online-casino-sites-intended-for-canadians-the-defined-2023-lis__trashed', 'how-to-play-blackjack-regulations-gameplay-mor__trashed', '1win-ci-site-officiel-de-paris-et-online-casino-connexio__trashed', 'spielautomaten-spielen-sie-slots-fuer-echtes-geld-und-kostenlo__trashed'
];

        $Allposts = Post::published()
            ->latest()
            ->whereNotIn('post_name', $excludedPostNames)
            ->paginate(12);

        $excludedCategories = [1];

        $categories = Taxonomy::where('taxonomy', 'category')
            ->whereNotIn('term_id', $excludedCategories)
            ->get();

        // Fetch posts for each category excluding specified slugs
        $postsByCategory = [];
        foreach ($categories as $category) {
            $categoryId = $category->term_id;
            $categoryName = $category->term->name;
            $posts = Post::whereHas('termRelationships', function ($query) use ($categoryId) {
                $query->join('term_taxonomy', 'term_relationships.term_taxonomy_id', '=', 'term_taxonomy.term_taxonomy_id')
                    ->where('term_taxonomy.taxonomy', '=', 'category')
                    ->where('term_taxonomy.term_taxonomy_id', '=', $categoryId);
            })
                ->where('post_status', 'publish') // Add this line to filter only published posts
                ->whereNotIn('post_name', $excludedPostNames)
                ->latest()
                ->get();

            $postsByCategory[$categoryName] = $posts;
        }

         $navbarCategories = Taxonomy::where('taxonomy', 'category')
            ->whereNotIn('term_id', $excludedCategories)
            ->take(5)
            ->get();

        // Fetch posts for each navbar category
        $navbarPostsByCategory = [];
        foreach ($navbarCategories as $category) {
            $categoryId = $category->term_id;
            $categoryName = $category->term->name;
            $posts = Post::whereHas('termRelationships', function ($query) use ($categoryId) {
                $query->join('term_taxonomy', 'term_relationships.term_taxonomy_id', '=', 'term_taxonomy.term_taxonomy_id')
                    ->where('term_taxonomy.taxonomy', '=', 'category')
                    ->where('term_taxonomy.term_taxonomy_id', '=', $categoryId);
            })
                ->where('post_status', 'publish') // Add this line to filter only published posts
                ->whereNotIn('post_name', $excludedPostNames)
                ->latest()
                ->get();

            $navbarPostsByCategory[$categoryName] = $posts;
        }

        $TopPost = Post::published()
            ->whereNotIn('post_name', $excludedPostNames)
            ->orderBy('count', 'desc')
            ->take(3)
            ->get();
        // dd($postsByCategory);
        $title = 'SIMRS | Sistem Informasi Rumah Sakit dan Klinik SAFFMedic';
        $description = 'Lihat SIMRS disini Aplikasi Sistem Manajemen Rumah Sakit dan Klinik untuk seluruh Faskes yang lengkap';
        return view('artikel', compact('Allposts', 'postsByCategory', 'TopPost', 'navbarPostsByCategory', 'title', 'description'));
    }

    public function show($postName)
    {
        $post = Post::published()
            ->where('post_name', $postName)->first();

        $excludedPostNames = ['navigation', 'wp-global-styles-twentytwentythree', 'wp-global-styles-twentytwentytwo', 'halo-dunia', 'header', 'laman-contoh', 'wp-global-styles-tailpress', 'beranda-blog', 'home', 'wp-global-styles-twentytwentyfour'];

        $TopPost = Post::published()
            ->whereNotIn('post_name', $excludedPostNames)
            ->orderBy('count', 'desc')
            ->take(3)
            ->get();

        $sessionKey = 'post_' . $post->post_name . '_viewed';

        $randomPost = Post::Published()
        ->whereNotIn('post_name', $excludedPostNames)
        ->get()
        ->shuffle()
        ->take(3);

        if (!session($sessionKey)) {
            $post->update([
                'count' => $post->count + 1
            ]);
            $post->save();
            session([$sessionKey => true]);
        }


        if (!$post) {
            abort(404);
        }

        //Category
        $categoryName = '';
        if ($post->categories) {
            foreach ($post->categories as $category) {
                $categoryName = $category->term->name;
                break;
            }
        } else {
            $categoryName = 'Uncategorized';
        }

        $excludedPostNames = ['navigation', 'wp-global-styles-twentytwentythree', 'wp-global-styles-twentytwentytwo', 'halo-dunia', 'header', 'laman-contoh', 'wp-global-styles-tailpress', 'beranda-blog', 'home'];
        $excludedCategories = [1];
        $categories = Taxonomy::where('taxonomy', 'category')
            ->whereNotIn('term_id', $excludedCategories)
            ->get();

        $postsByCategory = [];
        foreach ($categories as $category) {
            $categoryId = $category->term_id;
            $categoryName = $category->term->name;
            $posts = Post::published()
                ->whereNotIn('post_name', $excludedPostNames)
                ->whereExists(function ($query) use ($categoryId) {
                    $query->selectRaw(1)
                        ->from('term_relationships')
                        ->join('term_taxonomy', 'term_relationships.term_taxonomy_id', '=', 'term_taxonomy.term_taxonomy_id')
                        ->where('posts.ID', '=', 'term_relationships.object_id')
                        ->where('term_taxonomy.taxonomy', '=', 'category')
                        ->where('term_taxonomy.term_taxonomy_id', '=', $categoryId);
                })
                ->latest()
                ->get();
            $postsByCategory[$categoryName] = $posts;
        }

        list($tableOfContents, $modifiedPostContent) = $this->generateToC($post->post_content);

        $data = [
            'title' => $post->post_title,
            'post' => $post,
            'tableOfContents' => $tableOfContents,
            'modifiedPostContent' => $modifiedPostContent,
            'selectedCategory' => $categoryName,
            'postsByCategory' => $postsByCategory,
            'TopPost' => $TopPost,
            'RandomPost' => $randomPost,
        ];

        return view('post.show', $data);
    }

    public function generateToC($content)
    {
        $pattern = '/<h([2-6])\s+class=["\'].*?["\']>(.*?)<\/h\1>/i';

        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);

        $tableOfContents = '';
        $previousHeadingLevel = 0;

        foreach ($matches as $match) {
            $headingLevel = $match[1];
            $headingText = strip_tags($match[2]);
            $headingID = Str::slug($headingText, '-');


            while ($headingLevel > $previousHeadingLevel) {
                $tableOfContents .= '<ol>';
                $previousHeadingLevel++;
            }

            while ($headingLevel < $previousHeadingLevel) {
                $tableOfContents .= '</ol>';
                $previousHeadingLevel--;
            }

            $tableOfContents .= '<li><a href="#' . $headingID . '" style="text-decoration: none; color: #0e5242" class="mt-3">' . $headingText . '</a></li>';

            // Replace the heading in the content with an anchor tag
            $content = str_replace($match[0], '<h' . $headingLevel . ' id="' . $headingID . '" style="color: #0e5242;">' . $match[2] . '</h' . $headingLevel . '>', $content);
        }
        while ($previousHeadingLevel > 0) {
            $tableOfContents .= '</ol>';
            $previousHeadingLevel--;
        }
        return array($tableOfContents, $content);
    }
}