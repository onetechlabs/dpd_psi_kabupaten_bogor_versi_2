<?php 
use Cms\Classes\Theme;class Cms5f1e52943d9f7066032942_142c3ef7b6c38a2be7a91866f18fe072Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $imageitems     = [ ];
    $filesImage     = File::allFiles( 'storage/app/media/konten_dpd_psi_kabupaten_bogor/images/' );
    foreach ($filesImage as $item) {
        $imageitems[] = $item->getFilename();
    }
    rsort($imageitems, SORT_NUMERIC); // Bigest file number first
    $this['gallery'] = $imageitems;
    //dd( $imageitems );

    $videoitems     = [ ];
    $filesVideo    = File::allFiles( 'storage/app/media/konten_dpd_psi_kabupaten_bogor/videos/' );
    foreach ($filesVideo as $item) {
        $videoitems[] = $item->getFilename();
    }
    rsort($videoitems, SORT_NUMERIC); // Bigest file number first
    $this['gallery_videos'] = $videoitems;
    //dd( $videoitems );
}
}
