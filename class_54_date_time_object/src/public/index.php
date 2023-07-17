<?php

require_once __DIR__ . '/../vendor/autoload.php';

// $dateTime = new DateTime();
// $dateTime = new DateTime('tomorrow');
// $dateTime = new DateTime('tomorrow 3:45PM');

// $dateTime = new DateTime('07/17/2023 4:45PM', new DateTimeZone('Europe/Amsterdam'));

// $dateTime = new DateTime('07/17/2023 3:30PM');

// echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;
// var_dump($dateTime);

// $dateTime->setDate(2023, 9, 21)->setTime(2, 15); # as we are adjusting the timezone after setTime the time will be
// # the real time of the new timezone;

// // $dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'))->setDate(2023, 9, 21)->setTime(2, 15);
// $dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam')); 
// // $dateTime->setDate(2023, 9, 21)->setTime(2, 15);

// echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;

# for example if we receive the date from a input we'll not be able to define the datezone before anything
$date = '12/05/2023 3:30PM';

// $dateTime = new DateTime($date);
// $dateTime = new DateTime(str_replace('/', '-', $date));
// $dateTime = DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);

// var_dump($dateTime, new DateTime('12-05-2023'));

// date_timezone_set()

$date1 = '13/02/2023 3:20 AM';
$date2 = '20/06/2023 3:20 AM';

$newDateTime1 = str_replace('/', '-', $date1);
$newDateTime2 = str_replace('/', '-', $date2);

$dateTime1 = new DateTime($newDateTime1);
$dateTime2 = new DateTime($newDateTime2);

// $interval = new DateInterval('P2D');
$interval = new DateInterval('P3M2D');

$interval->invert = 1;

var_dump($interval);
echo '<br/>';

// $dateTime1->add($interval);
$dateTime1->sub($interval);

echo $dateTime1->format('m/d/Y g:iA') .PHP_EOL;

// var_dump($dateTime1->diff($dateTime2));
// var_dump($dateTime1 < $dateTime2);
// var_dump($dateTime1 > $dateTime2);
// var_dump($dateTime1 == $dateTime2);
// var_dump($dateTime1 <=> $dateTime2);

// echo $dateTime1->diff($dateTime2)->days;
// echo $dateTime1->diff($dateTime2)->format('%Y years, %m months, %d days, %H, %i, %s') . PHP_EOL;
// echo $dateTime1->diff($dateTime2)->format('%R%a') . PHP_EOL;


// echo 'NEW DATES <br/>';

// // $from = new DateTime();
// $from = new DateTimeImmutable(); # this works
// // $to = (new DateTime())->add(new DateInterval('P1M'));
// $to = $from->add(new DateInterval('P1M')); #this doesn't work
// // $to = (clone $from)->add(new DateInterval('P1M'));

// $to = $to->add(new DateInterval('P1Y'));

// echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;

// var_dump($from === $to);


echo '<br/> PERIOD <br/>';

// $period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), (new DateTime('05/31/2021'))->modify('+1 day'));
$period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), 3, DatePeriod::EXCLUDE_START_DATE); 

foreach($period as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}
