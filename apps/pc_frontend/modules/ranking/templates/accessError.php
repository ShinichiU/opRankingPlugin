<?php
slot('op_sidemenu');
include_parts('rankingLink', 'RankingLink');
end_slot();
include_box('access_list', __('The No1 of the number of access member'), __('all member is 0 access'));
