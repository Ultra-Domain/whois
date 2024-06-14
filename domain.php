<?php

#==================#
#     基本設定     #
#==================#

# 設定ファイル読み込み
$TLDs = array(
	'aero' => 'whois.aero',
	'arpa' => 'whois.iana.org',
	'asia' => 'whois.nic.asia',
	'biz' => 'whois.biz',
	'cat' => 'whois.cat',
	'com' => 'whois.verisign-grs.com',
	'coop' => 'whois.nic.coop',
	'edu' => 'whois.educause.edu',
	'gov' => 'whois.dotgov.gov',
	'info' => 'whois.afilias.net',
	'int' => 'whois.iana.org',
	'jobs' => 'jobswhois.verisign-grs.com',
	'mil' => 'whois.nic.mil',
	'mobi' => 'whois.dotmobiregistry.net',
	'museum' => 'whois.museum',
	'name' => 'whois.nic.name',
	'net' => 'whois.verisign-grs.com',
	'org' => 'whois.pir.org',
	'pro' => 'whois.registrypro.pro',
	'tel' => 'whois.nic.tel',
	'travel' => 'whois.nic.travel',
	'ac' => 'whois.nic.ac',
	'ad' => 'whois.ripe.net',
	'ae' => 'whois.nic.ae',
	'af' => 'whois.nic.af',
	'ag' => 'whois.nic.ag',
	'ai' => 'whois.ai',
	'al' => 'whois.ripe.net',
	'am' => 'whois.amnic.net',
	'as' => 'whois.nic.as',
	'at' => 'whois.nic.at',
	'au' => 'whois.aunic.net',
	'az' => 'whois.ripe.net',
	'ba' => 'whois.ripe.net',
	'be' => 'whois.dns.be',
	'bg' => 'whois.register.bg',
	'bm' => 'rwhois.ibl.bm',
	'bo' => 'whois.adsib.gob.bo',
	'br' => 'whois.registro.br',
	'bt' => 'whois.nic.bt',
	'bv' => 'whois.ripe.net',
	'by' => 'whois.ripe.net',
	'bz' => 'whois.belizenic.bz',
	'ca' => 'whois.cira.ca',
	'cc' => 'ccwhois.verisign-grs.com',
	'cd' => 'whois.nic.cd',
	'ch' => 'whois.nic.ch',
	'ci' => 'whois.nic.ci',
	'ck' => 'whois.ck-nic.org.ck',
	'cl' => 'whois.nic.cl',
	'cn' => 'whois.cnnic.cn',
	'co' => 'whois.nic.co',
	'cx' => 'whois.nic.cx',
	'cy' => 'whois.ripe.net',
	'cz' => 'whois.nic.cz',
	'de' => 'whois.denic.de',
	'dk' => 'whois.dk-hostmaster.dk',
	'dm' => 'whois.nic.dm',
	'do' => 'whois.nic.do',
	'dz' => 'whois.ripe.net',
	'ee' => 'whois.eenet.ee',
	'eg' => 'whois.ripe.net',
	'es' => 'whois.ripe.net',
	'eu' => 'whois.eu',
	'fi' => 'whois.ficora.fi',
	'fj' => 'whois.usp.ac.fj',
	'fo' => 'whois.ripe.net',
	'fr' => 'whois.nic.fr',
	'ga' => 'whois.ripe.net',
	'gb' => 'whois.ripe.net',
	'gd' => 'whois.adamsnames.com',
	'ge' => 'whois.ripe.net',
	'gf' => 'whois.nplus.gf',
	'gg' => 'whois.channelisles.net',
	'gi' => 'whois2.afilias-grs.net',
	'gl' => 'whois.ripe.net',
	'gm' => 'whois.ripe.net',
	'gr' => 'whois.ripe.net',
	'gs' => 'whois.nic.gs',
	'gy' => 'whois.registry.gy',
	'hk' => 'whois.hkirc.hk',
	'hm' => 'whois.nic.hm',
	'hn' => 'whois2.afilias-grs.net',
	'hr' => 'whois.ripe.net',
	'hu' => 'whois.nic.hu',
	'id' => 'whois.idnic.net.id',
	'ie' => 'whois.domainregistry.ie',
	'il' => 'whois.isoc.org.il',
	'in' => 'whois.inregistry.net',
	'io' => 'whois.nic.io',
	'ir' => 'whois.nic.ir',
	'is' => 'whois.isnet.is',
	'it' => 'whois.nic.it',
	'je' => 'whois.channelisles.net',
	'jo' => 'whois.ripe.net',
	'jp' => 'whois.jprs.jp',
	'ke' => 'whois.kenic.or.ke',
	'kg' => 'whois.domain.kg',
	'kh' => 'whois.knnic.net.kh',
	'ki' => 'whois.nic.ki',
	'kp' => 'whois.kcce.kp',
	'kr' => 'whois.nic.or.kr',
	'kz' => 'whois.nic.kz',
	'la' => 'whois.nic.la',
	'li' => 'whois.nic.li',
	'lk' => 'whois.nic.lk',
	'lt' => 'whois.domreg.lt',
	'lu' => 'whois.dns.lu',
	'lv' => 'whois.nic.lv',
	'ly' => 'whois.nic.ly',
	'ma' => 'whois.iam.net.ma',
	'md' => 'whois.nic.md',
	'me' => 'whois.nic.me',
	'mg' => 'whois.nic.mg',
	'mk' => 'whois.ripe.net',
	'mm' => 'whois.nic.mm',
	'mn' => 'whois.nic.mn',
	'ms' => 'whois.nic.ms',
	'mt' => 'whois.ripe.net',
	'mu' => 'whois.nic.mu',
	'mx' => 'whois.nic.mx',
	'my' => 'whois.mynic.net.my',
	'na' => 'whois.na-nic.com.na',
	'ng' => 'whois.rg.net',
	'nl' => 'whois.domain-registry.nl',
	'no' => 'whois.norid.no',
	'nu' => 'whois.nic.nu',
	'nz' => 'whois.srs.net.nz',
	'pe' => 'whois.nic.pe',
	'pk' => 'whois.pknic.net.pk',
	'pl' => 'whois.dns.pl',
	'pm' => 'whois.nic.pm',
	'pr' => 'whois.uprr.pr',
	'pt' => 'whois.dns.pt',
	'pw' => 'whois.nic.pw',
	're' => 'whois.nic.re',
	'ro' => 'whois.rotld.ro',
	'ru' => 'whois.ripn.net',
	'sa' => 'whois.nic.net.sa',
	'sb' => 'whois.nic.net.sb',
	'sc' => 'whois2.afilias-grs.net',
	'se' => 'whois.iis.se',
	'sg' => 'whois.nic.net.sg',
	'sh' => 'whois.nic.sh',
	'si' => 'whois.arnes.si',
	'sj' => 'whois.ripe.net',
	'sk' => 'whois.ripe.net',
	'sm' => 'whois.ripe.net',
	'so' => 'whois.nic.so',
	'sr' => 'whois.register.sr',
	'st' => 'whois.nic.st',
	'su' => 'whois.ripn.net',
	'tc' => 'whois.adamsnames.tc',
	'tf' => 'whois.nic.tf',
	'th' => 'whois.thnic.co.th',
	'tj' => 'whois.nic.tj',
	'tk' => 'whois.dot.tk',
	'tl' => 'whois.nic.tl',
	'tm' => 'whois.nic.tm',
	'tn' => 'whois.ripe.net',
	'to' => 'whois.tonic.to',
	'tr' => 'whois.nic.tr',
	'tv' => 'tvwhois.verisign-grs.com',
	'tw' => 'whois.twnic.net.tw',
	'ua' => 'whois.net.ua',
	'ug' => 'whois.co.ug',
	'uk' => 'whois.nic.uk',
	'us' => 'whois.nic.us',
	'uy' => 'www.rau.edu.uy',
	'uz' => 'whois.cctld.uz',
	'va' => 'whois.ripe.net',
	'vc' => 'whois2.afilias-grs.net',
	've' => 'whois.nic.ve',
	'vg' => 'whois.adamsnames.tc',
	'wf' => 'whois.nic.wf',
	'ws' => 'whois.website.ws',
	'yt' => 'whois.nic.yt',
	'yu' => 'whois.ripe.net',
	'ac.uk' => 'whois.ja.net',
	'ac.za' => 'whois.ac.za',
	'asn.au' => 'whois.ausregistry.net.au',
	'br.com' => 'whois.centralnic.net',
	'cn.com' => 'whois.centralnic.net',
	'com.au' => 'whois.ausregistry.net.au',
	'de.com' => 'whois.centralnic.net',
	'edu.cn' => 'whois.edu.cn',
	'eu.com' => 'whois.centralnic.net',
	'eu.org' => 'whois.eu.org',
	'fed.us' => 'whois.nic.gov',
	'gb.com' => 'whois.nomination.net',
	'gb.net' => 'whois.nomination.net',
	'gov.uk' => 'whois.ja.net',
	'hu.com' => 'whois.centralnic.net',
	'id.au' => 'whois.ausregistry.net.au',
	'jpn.com' => 'whois.centralnic.net',
	'net.au' => 'whois.ausregistry.net.au',
	'no.com' => 'whois.centralnic.net',
	'org.au' => 'whois.ausregistry.net.au',
	'org.za' => 'whois.org.za:4321',
	'qc.com' => 'whois.centralnic.net',
	'ru.com' => 'whois.centralnic.net',
	'sa.com' => 'whois.centralnic.net',
	'se.com' => 'whois.centralnic.net',
	'se.net' => 'whois.centralnic.net',
	'uk.com' => 'whois.centralnic.net',
	'uk.net' => 'whois.centralnic.net',
	'us.com' => 'whois.centralnic.net',
	'uy.com' => 'whois.centralnic.net',
	'web.com' => 'whois.centralnic.net',
	'za.com' => 'whois.centralnic.net',
	'net.cn' => 'whois.cnnic.net.cn',
	'bj.cn' => 'whois.cnnic.net.cn',
	'sh.cn' => 'whois.cnnic.net.cn',
	'tj.cn' => 'whois.cnnic.net.cn',
	'cq.cn' => 'whois.cnnic.net.cn',
	'he.cn' => 'whois.cnnic.net.cn',
	'sx.cn' => 'whois.cnnic.net.cn',
	'nm.cn' => 'whois.cnnic.net.cn',
	'ln.cn' => 'whois.cnnic.net.cn',
	'jl.cn' => 'whois.cnnic.net.cn',
	'hl.cn' => 'whois.cnnic.net.cn',
	'js.cn' => 'whois.cnnic.net.cn',
	'zj.cn' => 'whois.cnnic.net.cn',
	'ah.cn' => 'whois.cnnic.net.cn',
	'fj.cn' => 'whois.cnnic.net.cn',
	'jx.cn' => 'whois.cnnic.net.cn',
	'sd.cn' => 'whois.cnnic.net.cn',
	'ha.cn' => 'whois.cnnic.net.cn',
	'hb.cn' => 'whois.cnnic.net.cn',
	'hn.cn' => 'whois.cnnic.net.cn',
	'gd.cn' => 'whois.cnnic.net.cn',
	'gx.cn' => 'whois.cnnic.net.cn',
	'hi.cn' => 'whois.cnnic.net.cn',
	'sc.cn' => 'whois.cnnic.net.cn',
	'gz.cn' => 'whois.cnnic.net.cn',
	'yn.cn' => 'whois.cnnic.net.cn',
	'xz.cn' => 'whois.cnnic.net.cn',
	'sn.cn' => 'whois.cnnic.net.cn',
	'gs.cn' => 'whois.cnnic.net.cn',
	'qh.cn' => 'whois.cnnic.net.cn',
	'nx.cn' => 'whois.cnnic.net.cn',
	'xj.cn' => 'whois.cnnic.net.cn',
	'tw.cn' => 'whois.cnnic.net.cn',
	'hk.cn' => 'whois.cnnic.net.cn',
	'mo.cn' => 'whois.cnnic.net.cn',
	'net.th' => 'whois.thnic.net',
	'com.tw' => 'whois.twnic.net',
	'idv.tw' => 'whois.twnic.net',
	'edu.tw' => 'whois.twnic.net',
	'net.tw' => 'whois.twnic.net',
	'net.br' => 'whois.registro.br',
	'com.br' => 'whois.registro.br',
	'gov.br' => 'whois.registro.br',
);



# WHOIS検索
function Whois($domain) {

	# 日本語の場合
	$domainPuny = NULL;
	$domain = $_REQUEST['domain'];
	if ( !preg_match ("/^[a-zA-Z0-9-.]+$/", $domain) ) {

		# Punycode変換前
		$domainPuny = $domain;

		# Punycodeデコード（ASCII化）
		$domain = PunycodeEncode($domain);

	# ASCIIの場合
	} else {

		$domain = $domain;

	}

	# ドメイン表記
	if ( isset($domainPuny) and strlen($domainPuny) > 0 ) {

		$dispDomain = "$domainPuny($domain)";
		$dispDomainAscii = $domainPuny;

	} else {

		$dispDomain = $domain;
		$dispDomainAscii = $domainPuny;

	}

	# 小文字に変換
	$domain = strtolower($domain);

	# URL入力整形
	$domain = trim(preg_replace("/http:\/\/|https:\/\/|\/(.*)/", "", $domain));

    $whois = "";
	if( $domain ){

		$svflg = 0;   //フラグセット
		foreach ( $GLOBALS['TLDs'] as $tld => $sv ) {

			$tld = ".".$tld;

			if( preg_match("/($tld)$/", $domain) ){
				$svflg = 1;
				break;
			}

		}

		if ( $svflg == 1 ) {

			# socket OPEN port=43
			$fso = fsockopen( $sv, 43, $errno, $errstr, 15 );

			if( !$fso ){

				echo "Socket connection Error! $errstr ($errno)";
				exit;

			} else {

				fputs( $fso, "$domain\r\n" );

				while( !feof( $fso ) ){

					$line = fgets( $fso, 512 );

					# 文字コード変換（JIS->UTF-8）
					$whois .= mb_convert_encoding($line, "utf8", "auto");

				}

				fclose ($fso);

			}

		}

	}

    return $whois;

}
