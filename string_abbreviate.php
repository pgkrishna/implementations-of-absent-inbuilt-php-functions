function string_abbreviate($org, $stop_words)
{
    $words = explode(' ', trim($org));
    $abbrevs = array('');
    if (count($words) > 1) {
        foreach ($words as $word) {
            if (in_array(strtolower($word), $stop_words)) {
// create a new set of abbreviations with this word's initial included
                $new_abbrevs = array();
                foreach ($abbrevs as $abbrev) 
                    $new_abbrevs[] = $abbrev . $word[0];
// old abbrevs and new abbrevs to be grouped into one
                $abbrevs = array_merge($abbrevs, $new_abbrevs);
            } else
// add the initial to each abbreviation            
                foreach ($abbrevs as &$abb) 
                    $abb .= $word[0];
        }
    } else 
        $abbrevs[0] = substr($words[0], 0, 3);

    return array_unique(array_filter(array_merge($words, $abbrevs)));
}

//implementation can be useful for abbreviating full organisation names with various possibilities
$stop_words = array('of', 'and', '&');
$org = "Gandhi Institute of Technology and Management, KV MEG & Centre";
$abbreviation_array = splort($org, $stop_words);
print_r($abbreviation_array);

//Output:
//Array
//(
//    [0] => Gandhi
//    [1] => Institute
//    [2] => of
//    [3] => Technology
//    [4] => and
//    [5] => Management,
//    [6] => KV
//    [7] => MEG
//    [8] => &
//    [9] => Centre
//    [10] => GITMKMC
//    [11] => GIoTMKMC
//    [12] => GITaMKMC
//    [13] => GIoTaMKMC
//    [14] => GITMKM&C
//    [15] => GIoTMKM&C
//    [16] => GITaMKM&C
//    [17] => GIoTaMKM&C
//)
