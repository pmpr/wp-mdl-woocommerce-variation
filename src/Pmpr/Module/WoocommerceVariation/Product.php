<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b177cdc40             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceVariation; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; class Product extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\157\144\171\x5f\x63\x6c\141\163\163", [$this, "\163\155\151\163\x67\141\x63\x61\x65\171\163\167\x69\x65\x63\163"], 999)->cecaguuoecmccuse("\x77\x6f\157\143\157\155\155\x65\x72\143\145\x5f\144\162\157\x70\x64\x6f\167\156\x5f\x76\x61\162\x69\x61\x74\x69\157\156\x5f\x61\x74\164\162\x69\x62\x75\164\145\137\157\160\x74\x69\x6f\x6e\x73\x5f\x68\x74\155\154", [$this, "\154\167\x6b\163\x71\143\151\157\143\x79\161\x6f\x73\x69\x61\x71"], 99, 2); } public function smisgacaeyswiecs($cmkqisoeyioisqaw) { array_push($cmkqisoeyioisqaw, "\x70\x6d\160\162\x2d\x77\157\157\x63\157\155\155\145\162\x63\x65\x2d\166\x61\x72\x69\141\164\x69\157\x6e\x2d\x62\157\170\x65\x73"); return $cmkqisoeyioisqaw; } public function uyeqoqgymiqqcsiq($ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::gouqcwikiiygyasc => '', self::squoamkioomemiyi => '', self::NAME => '', self::oguseymmyyoyaako => false, self::ATTRIBUTE => false, "\x63\x6c\x61\163\x73" => '', "\157\x70\164\x69\x6f\156\x73" => false, "\163\x65\154\x65\143\x74\x65\144" => false, "\163\150\157\167\x5f\157\x70\x74\151\157\x6e\137\x6e\157\x6e\145" => esc_html__("\103\150\157\157\x73\145\x20\x61\156\x20\157\x70\164\x69\x6f\x6e", PR__MDL__WOOCOMMERCE_VARIATION)]); $ymkomoccmymcoiea = $ywmkwiwkosakssii[self::ATTRIBUTE]; $qiouiwasaauyaaue = $ywmkwiwkosakssii["\157\x70\164\151\157\156\163"]; $product = $ywmkwiwkosakssii[self::oguseymmyyoyaako]; $ymqmyyeuycgmigyo = $ywmkwiwkosakssii[self::NAME] ?: "\x61\164\x74\x72\x69\x62\x75\x74\x65\137" . sanitize_title($ymkomoccmymcoiea); if (!(empty($qiouiwasaauyaaue) && !empty($product) && !empty($ymkomoccmymcoiea))) { goto qiaqsassksqiuyae; } $siquossayskcwkea = $product->get_variation_attributes(); $qiouiwasaauyaaue = $siquossayskcwkea[$ymkomoccmymcoiea]; qiaqsassksqiuyae: $nsmgceoqaqogqmuw = ''; if (!($product && !empty($qiouiwasaauyaaue))) { goto mkwskuycuyguqqok; } [$qiouiwasaauyaaue, $uiiuuaeiyecmiouc] = $this->ucwsaciumowgweeo($product, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue); if (taxonomy_exists($ymkomoccmymcoiea)) { goto csscmcacoikwsecs; } foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { $nsmgceoqaqogqmuw .= $this->wuqmciamumosasqa($omkysikckkcieckq, $ymkomoccmymcoiea, $product, $omkysikckkcieckq, $ywmkwiwkosakssii, $uiiuuaeiyecmiouc); asmecuqiyyswueqe: } myoicgcuugciueis: goto cuykwgmswkskqkyi; csscmcacoikwsecs: $uyuaosigqymaqsaa = wc_get_product_terms($product->get_id(), $ymkomoccmymcoiea, [self::ymckmcsiymwqucoq => self::ALL]); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!in_array($iwewcwusemqaiggk->slug, $qiouiwasaauyaaue, true)) { goto qwigomakwmyiwkgo; } $nsmgceoqaqogqmuw .= $this->wuqmciamumosasqa($iwewcwusemqaiggk->name, $ymkomoccmymcoiea, $product, $iwewcwusemqaiggk->slug, $ywmkwiwkosakssii, $uiiuuaeiyecmiouc, $iwewcwusemqaiggk); qwigomakwmyiwkgo: qgoiooayqmqqsiok: } qogqewiwmwiwskgm: cuykwgmswkskqkyi: if (!$nsmgceoqaqogqmuw) { goto kuicqywysciceggs; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\165\x6c", ["\144\x61\x74\x61\55\164\x61\x72\x67\x65\x74" => $ymqmyyeuycgmigyo, "\143\x6c\x61\163\x73" => "\x61\x74\x74\x72\x69\x62\165\164\x65\x2d\142\x6f\170\145\163" . (empty($uiiuuaeiyecmiouc) ? "\40\150\151\x64\145\x2d\x6f\156\55\x63\x68\x61\x6e\x67\145" : '')], $nsmgceoqaqogqmuw); kuicqywysciceggs: mkwskuycuyguqqok: return $nsmgceoqaqogqmuw; } public function mkgymcosewckmuuq($nsmgceoqaqogqmuw, $momcykaoccoymeig, $gaeqamemwmwsyukm) : string { $qcsieyqqegaoocks = "\74\x64\151\x76\40\143\x6c\141\x73\x73\75\42\x62\157\170\145\163\x2d\x77\x72\x61\160\x70\x65\x72\42\x3e"; if ($momcykaoccoymeig == 0) { goto kwagwqyusyiyoaqs; } if (!($momcykaoccoymeig % 3 == 0)) { goto sciwggaeogcoesiu; } $nsmgceoqaqogqmuw .= "\x3c\57\144\x69\x76\x3e{$qcsieyqqegaoocks}"; sciwggaeogcoesiu: if (!($momcykaoccoymeig === $gaeqamemwmwsyukm)) { goto eqkauqciwewmgeoi; } $nsmgceoqaqogqmuw .= "\74\x2f\144\x69\x76\76"; eqkauqciwewmgeoi: goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: $nsmgceoqaqogqmuw .= $qcsieyqqegaoocks; yowsmsiyimmimemc: return $nsmgceoqaqogqmuw; } public function lwksqciocyqosiaq($nsmgceoqaqogqmuw, $ywmkwiwkosakssii) : ?string { $saouceauqqiwcwas = $this->uyeqoqgymiqqcsiq($ywmkwiwkosakssii); if (!$saouceauqqiwcwas) { goto kiqogmwcgcamwiig; } $nsmgceoqaqogqmuw .= $saouceauqqiwcwas; kiqogmwcgcamwiig: return $nsmgceoqaqogqmuw; } public function ucwsaciumowgweeo($product, $ymkomoccmymcoiea, $kycgyeqaqygewoku) : array { $uiiuuaeiyecmiouc = []; $qiouiwasaauyaaue = []; $qecuekqmeaiykeek = $product->get_available_variations(); foreach ($qecuekqmeaiykeek as $isweyuoisomqyaag) { if (!isset($isweyuoisomqyaag["\166\141\162\151\141\x74\151\x6f\156\137\x69\x64"], $isweyuoisomqyaag[self::iikosyqiawkweouo][$ymkomoccmymcoiea])) { goto ocokwuuquaokmasc; } $ymqmyyeuycgmigyo = $isweyuoisomqyaag[self::iikosyqiawkweouo][$ymkomoccmymcoiea]; if (!in_array($ymqmyyeuycgmigyo, $kycgyeqaqygewoku)) { goto cggowoquuiwqkyew; } if (!(count($isweyuoisomqyaag[self::iikosyqiawkweouo]) == 1)) { goto eequksumcoogyoem; } $uiiuuaeiyecmiouc[$ymqmyyeuycgmigyo] = $isweyuoisomqyaag["\144\x69\x73\160\x6c\x61\171\137\160\x72\x69\x63\145"]; eequksumcoogyoem: if (in_array($ymqmyyeuycgmigyo, $qiouiwasaauyaaue)) { goto uukumskkeggaowck; } $qiouiwasaauyaaue[$isweyuoisomqyaag["\166\141\162\x69\141\164\151\x6f\x6e\x5f\151\144"]] = $ymqmyyeuycgmigyo; uukumskkeggaowck: cggowoquuiwqkyew: ocokwuuquaokmasc: sqiciiuwmykocycc: } iomcaiwewsawiamu: return [$qiouiwasaauyaaue, $uiiuuaeiyecmiouc]; } public function wuqmciamumosasqa($meqocwsecsywiiqs, $ymkomoccmymcoiea, $product, $aaokuekaimigoyue, $ywmkwiwkosakssii = [], $uiiuuaeiyecmiouc = [], $iwewcwusemqaiggk = null) : string { $meqocwsecsywiiqs = esc_html($this->sscegwueamckwmcy("\167\x6f\x6f\143\x6f\x6d\x6d\145\x72\143\145\137\166\141\x72\151\141\164\151\157\x6e\x5f\157\160\164\151\157\156\137\x6e\141\155\x65", $meqocwsecsywiiqs, $iwewcwusemqaiggk, $ymkomoccmymcoiea, $product)); $eukcwuoswiaygccq = sanitize_title($ywmkwiwkosakssii["\x73\145\x6c\x65\x63\x74\x65\144"]) == $aaokuekaimigoyue; $egkyssmuqcwaciya = "\141\x74\x74\162\151\142\x75\x74\145\55\142\157\170" . ($eukcwuoswiaygccq ? "\40\x73\x65\x6c\145\143\x74\145\x64" : '') . (!empty($uiiuuaeiyecmiouc) ? "\x20\x68\141\x73\55\160\x72\151\x63\145" : ''); $aumscagymwyyicag = ''; if (!isset($uiiuuaeiyecmiouc[$aaokuekaimigoyue])) { goto yiwiqaqmwiogawym; } $aumscagymwyyicag = ManipulateHTML::iaaacsuskiakkwui(wc_price($uiiuuaeiyecmiouc[$aaokuekaimigoyue]), ["\143\154\x61\163\x73" => "\x61\164\164\x72\x69\142\165\x74\x65\x2d\x62\x6f\170\x2d\x70\x72\151\143\145"]); yiwiqaqmwiogawym: $pkyyagewkiyckmwy = ManipulateHTML::iaaacsuskiakkwui($meqocwsecsywiiqs, ["\143\x6c\x61\x73\163" => "\141\164\164\x72\151\x62\165\164\145\55\142\x6f\x78\55\154\141\142\x65\154"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($pkyyagewkiyckmwy . $aumscagymwyyicag, ["\x63\154\141\163\163" => "\141\x74\164\162\x69\x62\165\x74\x65\55\x62\x6f\x78\x2d\143\x6f\x6e\x74\x65\156\x74"]); return ManipulateHTML::uuccukgasskgimsq("\154\x69", ["\162\157\154\145" => "\162\x61\x64\151\x6f", "\x63\x6c\141\x73\x73" => $egkyssmuqcwaciya, "\164\151\x74\x6c\145" => $meqocwsecsywiiqs, "\x74\141\142\x69\156\x64\145\x78" => "\60", "\144\x61\x74\x61\55\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\x64\x61\164\141\55\x76\141\x6c\x75\x65" => $aaokuekaimigoyue], $nsmgceoqaqogqmuw); } }
