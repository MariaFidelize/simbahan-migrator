<?php

namespace App\Sheets;


use App\Models\Schedule;

class Makati
{
    const churchNameColumn = 'C';

    const lastUpdatedColumn = 'D';
    const latitudeColumn = 'E';
    const longitudeColumn = 'F';
    const fullAddressColumn = 'G';
    const streetColumn = 'H';
    const blockColumn = 'I';
    const townColumn = 'J';
    const stateColumn = 'K';
    const countryColumn = 'L';
    const churchTypeColumn = 'M';
    const dateEstablishedColumn = 'N';
    const feastDayColumn = 'O';
    const priestColumn = 'P';
    const vicariateColumn = 'Q';
    const dioceseColumn = 'R';
    const administeredByColumn = 'S';
    const contactColumn = 'T';
    const websiteColumn = 'U';
    const emailColumn = 'V';
    const standaloneColumn = 'W';
    const conventsColumn = 'X';
    const mallsColumn = 'Y';
    const schoolsColumn = 'Z';
    const hospitalsColumn = 'AA';
    const othersColumn = 'AB';
    const airConditionedColumn = 'AC';
    const ceilingFanColumn = 'AD';
    const ordinaryFanColumn = 'AE';
    const streetParkingColumn = 'AF';
    const mallParkingColumn = 'AG';
    const privateChurchParkingColumn = 'AH';
    const otherParkingColumn = 'AI';
    const withAdorationColumn = 'AJ';
    const AdorationHasAirConditionedColumn = 'AK';
    const AdorationHasElectricFanColumn = 'AL';

    // Sunday Schedules
    const scheduleSunday5_6AM = 'AM';
    const scheduleSunday6_7AM = 'AN';
    const scheduleSunday7_8AM = 'AO';
    const scheduleSunday8_9AM = 'AP';
    const scheduleSunday9_10AM = 'AQ';
    const scheduleSunday10_11AM = 'AR';
    const scheduleSunday11_12PM = 'AS';
    const scheduleSunday12_1PM = 'AT';
    const scheduleSunday1_2PM = 'AU';
    const scheduleSunday2_3PM = 'AV';
    const scheduleSunday3_4PM = 'AW';
    const scheduleSunday4_5PM = 'AX';
    const scheduleSunday5_6PM = 'AY';
    const scheduleSunday6_7PM = 'AZ';
    const scheduleSunday7_8PM = 'BA';
    const scheduleSunday8_9PM = 'BB';
    const scheduleSunday9_10PM = 'BC';

    // Monday Schedules
    const scheduleMonday5_6AM = 'BD';
    const scheduleMonday6_7AM = 'BE';
    const scheduleMonday7_8AM = 'BF';
    const scheduleMonday8_9AM = 'BG';
    const scheduleMonday9_10AM = 'BH';
    const scheduleMonday10_11AM = 'BI';
    const scheduleMonday11_12PM = 'BJ';
    const scheduleMonday12_1PM = 'BK';
    const scheduleMonday1_2PM = 'BL';
    const scheduleMonday2_3PM = 'BM';
    const scheduleMonday3_4PM = 'BN';
    const scheduleMonday4_5PM = 'BO';
    const scheduleMonday5_6PM = 'BP';
    const scheduleMonday6_7PM = 'BQ';
    const scheduleMonday7_8PM = 'BR';
    const scheduleMonday8_9PM = 'BS';
    const scheduleMonday9_10PM = 'BT';

    // Tuesday Schedules
    const scheduleTuesday5_6AM = 'BU';
    const scheduleTuesday6_7AM = 'BV';
    const scheduleTuesday7_8AM = 'BW';
    const scheduleTuesday8_9AM = 'BX';
    const scheduleTuesday9_10AM = 'BY';
    const scheduleTuesday10_11AM = 'BZ';
    const scheduleTuesday11_12PM = 'CA';
    const scheduleTuesday12_1PM = 'CB';
    const scheduleTuesday1_2PM = 'CC';
    const scheduleTuesday2_3PM = 'CD';
    const scheduleTuesday3_4PM = 'CE';
    const scheduleTuesday4_5PM = 'CF';
    const scheduleTuesday5_6PM = 'CG';
    const scheduleTuesday6_7PM = 'CH';
    const scheduleTuesday7_8PM = 'CI';
    const scheduleTuesday8_9PM = 'CJ';
    const scheduleTuesday9_10PM = 'CK';

    // Wednesday Schedules
    const scheduleWednesday5_6AM = 'CL';
    const scheduleWednesday6_7AM = 'CM';
    const scheduleWednesday7_8AM = 'CN';
    const scheduleWednesday8_9AM = 'CO';
    const scheduleWednesday9_10AM = 'CP';
    const scheduleWednesday10_11AM = 'CQ';
    const scheduleWednesday11_12PM = 'CR';
    const scheduleWednesday12_1PM = 'CS';
    const scheduleWednesday1_2PM = 'CT';
    const scheduleWednesday2_3PM = 'CU';
    const scheduleWednesday3_4PM = 'CV';
    const scheduleWednesday4_5PM = 'CW';
    const scheduleWednesday5_6PM = 'CX';
    const scheduleWednesday6_7PM = 'CY';
    const scheduleWednesday7_8PM = 'CZ';
    const scheduleWednesday8_9PM = 'DA';
    const scheduleWednesday9_10PM = 'DB';

    // Thursday Schedules
    const scheduleThursday5_6AM = 'DC';
    const scheduleThursday6_7AM = 'DD';
    const scheduleThursday7_8AM = 'DE';
    const scheduleThursday8_9AM = 'DF';
    const scheduleThursday9_10AM = 'DG';
    const scheduleThursday10_11AM = 'DH';
    const scheduleThursday11_12PM = 'DI';
    const scheduleThursday12_1PM = 'DJ';
    const scheduleThursday1_2PM = 'DK';
    const scheduleThursday2_3PM = 'DL';
    const scheduleThursday3_4PM = 'DM';
    const scheduleThursday4_5PM = 'DN';
    const scheduleThursday5_6PM = 'DO';
    const scheduleThursday6_7PM = 'DP';
    const scheduleThursday7_8PM = 'DQ';
    const scheduleThursday8_9PM = 'DR';
    const scheduleThursday9_10PM = 'DS';

    // Friday Schedules
    const scheduleFriday5_6AM = 'DT';
    const scheduleFriday6_7AM = 'DU';
    const scheduleFriday7_8AM = 'DV';
    const scheduleFriday8_9AM = 'DW';
    const scheduleFriday9_10AM = 'DX';
    const scheduleFriday10_11AM = 'DY';
    const scheduleFriday11_12PM = 'DZ';
    const scheduleFriday12_1PM = 'EA';
    const scheduleFriday1_2PM = 'EB';
    const scheduleFriday2_3PM = 'EC';
    const scheduleFriday3_4PM = 'ED';
    const scheduleFriday4_5PM = 'EE';
    const scheduleFriday5_6PM = 'EF';
    const scheduleFriday6_7PM = 'EG';
    const scheduleFriday7_8PM = 'EH';
    const scheduleFriday8_9PM = 'EI';
    const scheduleFriday9_10PM = 'EJ';

    // Saturday Schedules
    const scheduleSaturday5_6AM = 'EK';
    const scheduleSaturday6_7AM = 'EL';
    const scheduleSaturday7_8AM = 'EM';
    const scheduleSaturday8_9AM = 'EN';
    const scheduleSaturday9_10AM = 'EO';
    const scheduleSaturday10_11AM = 'EP';
    const scheduleSaturday11_12PM = 'EQ';
    const scheduleSaturday12_1PM = 'ER';
    const scheduleSaturday1_2PM = 'ES';
    const scheduleSaturday2_3PM = 'ET';
    const scheduleSaturday3_4PM = 'EU';
    const scheduleSaturday4_5PM = 'EV';
    const scheduleSaturday5_6PM = 'EW';
    const scheduleSaturday6_7PM = 'EX';
    const scheduleSaturday7_8PM = 'EY';
    const scheduleSaturday8_9PM = 'EZ';
    const scheduleSaturday9_10PM = 'FA';

    // Sunday Language
    const languageSunday5_6AM = 'FB';
    const languageSunday6_7AM = 'FC';
    const languageSunday7_8AM = 'FD';
    const languageSunday8_9AM = 'FE';
    const languageSunday9_10AM = 'FF';
    const languageSunday10_11AM = 'FG';
    const languageSunday11_12PM = 'FH';
    const languageSunday12_1PM = 'FI';
    const languageSunday1_2PM = 'FJ';
    const languageSunday2_3PM = 'FK';
    const languageSunday3_4PM = 'FL';
    const languageSunday4_5PM = 'FM';
    const languageSunday5_6PM = 'FN';
    const languageSunday6_7PM = 'FO';
    const languageSunday7_8PM = 'FP';
    const languageSunday8_9PM = 'FQ';
    const languageSunday9_10PM = 'FR';

    // Monday Language
    const languageMonday5_6AM = 'FS';
    const languageMonday6_7AM = 'FT';
    const languageMonday7_8AM = 'FU';
    const languageMonday8_9AM = 'FV';
    const languageMonday9_10AM = 'FW';
    const languageMonday10_11AM = 'FX';
    const languageMonday11_12PM = 'FY';
    const languageMonday12_1PM = 'FZ';
    const languageMonday1_2PM = 'GA';
    const languageMonday2_3PM = 'GB';
    const languageMonday3_4PM = 'GC';
    const languageMonday4_5PM = 'GD';
    const languageMonday5_6PM = 'GE';
    const languageMonday6_7PM = 'GF';
    const languageMonday7_8PM = 'GG';
    const languageMonday8_9PM = 'GH';
    const languageMonday9_10PM = 'GI';

    // Tuesday Language
    const languageTuesday5_6AM = 'GJ';
    const languageTuesday6_7AM = 'GK';
    const languageTuesday7_8AM = 'GL';
    const languageTuesday8_9AM = 'GM';
    const languageTuesday9_10AM = 'GN';
    const languageTuesday10_11AM = 'GO';
    const languageTuesday11_12PM = 'GP';
    const languageTuesday12_1PM = 'GQ';
    const languageTuesday1_2PM = 'GR';
    const languageTuesday2_3PM = 'GS';
    const languageTuesday3_4PM = 'GT';
    const languageTuesday4_5PM = 'GU';
    const languageTuesday5_6PM = 'GV';
    const languageTuesday6_7PM = 'GW';
    const languageTuesday7_8PM = 'GX';
    const languageTuesday8_9PM = 'GY';
    const languageTuesday9_10PM = 'GZ';

    // Wednesday Language
    const languageWednesday5_6AM = 'HA';
    const languageWednesday6_7AM = 'HB';
    const languageWednesday7_8AM = 'HC';
    const languageWednesday8_9AM = 'HD';
    const languageWednesday9_10AM = 'HE';
    const languageWednesday10_11AM = 'HF';
    const languageWednesday11_12PM = 'HG';
    const languageWednesday12_1PM = 'HH';
    const languageWednesday1_2PM = 'HI';
    const languageWednesday2_3PM = 'HJ';
    const languageWednesday3_4PM = 'HK';
    const languageWednesday4_5PM = 'HL';
    const languageWednesday5_6PM = 'HM';
    const languageWednesday6_7PM = 'HN';
    const languageWednesday7_8PM = 'HO';
    const languageWednesday8_9PM = 'HP';
    const languageWednesday9_10PM = 'HQ';

    // Thursday Language
    const languageThursday5_6AM = 'HR';
    const languageThursday6_7AM = 'HS';
    const languageThursday7_8AM = 'HT';
    const languageThursday8_9AM = 'HU';
    const languageThursday9_10AM = 'HV';
    const languageThursday10_11AM = 'HW';
    const languageThursday11_12PM = 'HX';
    const languageThursday12_1PM = 'HY';
    const languageThursday1_2PM = 'HZ';
    const languageThursday2_3PM = 'IA';
    const languageThursday3_4PM = 'IB';
    const languageThursday4_5PM = 'IC';
    const languageThursday5_6PM = 'ID';
    const languageThursday6_7PM = 'IE';
    const languageThursday7_8PM = 'IF';
    const languageThursday8_9PM = 'IG';
    const languageThursday9_10PM = 'IH';

    // Friday Language
    const languageFriday5_6AM = 'II';
    const languageFriday6_7AM = 'IJ';
    const languageFriday7_8AM = 'IK';
    const languageFriday8_9AM = 'IL';
    const languageFriday9_10AM = 'IM';
    const languageFriday10_11AM = 'IN';
    const languageFriday11_12PM = 'IO';
    const languageFriday12_1PM = 'IP';
    const languageFriday1_2PM = 'IQ';
    const languageFriday2_3PM = 'IR';
    const languageFriday3_4PM = 'IS';
    const languageFriday4_5PM = 'IT';
    const languageFriday5_6PM = 'IU';
    const languageFriday6_7PM = 'IV';
    const languageFriday7_8PM = 'IW';
    const languageFriday8_9PM = 'IX';
    const languageFriday9_10PM = 'IY';

    // Saturday Language
    const languageSaturday5_6AM = 'IZ';
    const languageSaturday6_7AM = 'JA';
    const languageSaturday7_8AM = 'JB';
    const languageSaturday8_9AM = 'JC';
    const languageSaturday9_10AM = 'JD';
    const languageSaturday10_11AM = 'JE';
    const languageSaturday11_12PM = 'JF';
    const languageSaturday12_1PM = 'JG';
    const languageSaturday1_2PM = 'JH';
    const languageSaturday2_3PM = 'JI';
    const languageSaturday3_4PM = 'JJ';
    const languageSaturday4_5PM = 'JK';
    const languageSaturday5_6PM = 'JL';
    const languageSaturday6_7PM = 'JM';
    const languageSaturday7_8PM = 'JN';
    const languageSaturday8_9PM = 'JO';
    const languageSaturday9_10PM = 'JP';

    // Sunday Confession
    const confessionSunday5_6AM = 'JQ';
    const confessionSunday6_7AM = 'JR';
    const confessionSunday7_8AM = 'JS';
    const confessionSunday8_9AM = 'JT';
    const confessionSunday9_10AM = 'JU';
    const confessionSunday10_11AM = 'JV';
    const confessionSunday11_12PM = 'JW';
    const confessionSunday12_1PM = 'JX';
    const confessionSunday1_2PM = 'JY';
    const confessionSunday2_3PM = 'JZ';
    const confessionSunday3_4PM = 'KA';
    const confessionSunday4_5PM = 'KB';
    const confessionSunday5_6PM = 'KC';
    const confessionSunday6_7PM = 'KD';
    const confessionSunday7_8PM = 'KE';
    const confessionSunday8_9PM = 'KF';
    const confessionSunday9_10PM = 'KG';

    // Monday Confession
    const confessionMonday5_6AM = 'KH';
    const confessionMonday6_7AM = 'KI';
    const confessionMonday7_8AM = 'KJ';
    const confessionMonday8_9AM = 'KK';
    const confessionMonday9_10AM = 'KL';
    const confessionMonday10_11AM = 'KM';
    const confessionMonday11_12PM = 'KN';
    const confessionMonday12_1PM = 'KO';
    const confessionMonday1_2PM = 'KP';
    const confessionMonday2_3PM = 'KQ';
    const confessionMonday3_4PM = 'KR';
    const confessionMonday4_5PM = 'KS';
    const confessionMonday5_6PM = 'KT';
    const confessionMonday6_7PM = 'KU';
    const confessionMonday7_8PM = 'KV';
    const confessionMonday8_9PM = 'KW';
    const confessionMonday9_10PM = 'KX';

    // Tuesday Confession
    const confessionTuesday5_6AM = 'KY';
    const confessionTuesday6_7AM = 'KZ';
    const confessionTuesday7_8AM = 'LA';
    const confessionTuesday8_9AM = 'LB';
    const confessionTuesday9_10AM = 'LC';
    const confessionTuesday10_11AM = 'LD';
    const confessionTuesday11_12PM = 'LE';
    const confessionTuesday12_1PM = 'LF';
    const confessionTuesday1_2PM = 'LG';
    const confessionTuesday2_3PM = 'LH';
    const confessionTuesday3_4PM = 'LI';
    const confessionTuesday4_5PM = 'LJ';
    const confessionTuesday5_6PM = 'LK';
    const confessionTuesday6_7PM = 'LL';
    const confessionTuesday7_8PM = 'LM';
    const confessionTuesday8_9PM = 'LN';
    const confessionTuesday9_10PM = 'LO';

    // Wednesday Confession
    const confessionWednesday5_6AM = 'LP';
    const confessionWednesday6_7AM = 'LQ';
    const confessionWednesday7_8AM = 'LR';
    const confessionWednesday8_9AM = 'LS';
    const confessionWednesday9_10AM = 'LT';
    const confessionWednesday10_11AM = 'LU';
    const confessionWednesday11_12PM = 'LV';
    const confessionWednesday12_1PM = 'LW';
    const confessionWednesday1_2PM = 'LX';
    const confessionWednesday2_3PM = 'LY';
    const confessionWednesday3_4PM = 'LZ';
    const confessionWednesday4_5PM = 'MA';
    const confessionWednesday5_6PM = 'MB';
    const confessionWednesday6_7PM = 'MC';
    const confessionWednesday7_8PM = 'MD';
    const confessionWednesday8_9PM = 'ME';
    const confessionWednesday9_10PM = 'MF';

    // Thursday Confession
    const confessionThursday5_6AM = 'MG';
    const confessionThursday6_7AM = 'MH';
    const confessionThursday7_8AM = 'MI';
    const confessionThursday8_9AM = 'MJ';
    const confessionThursday9_10AM = 'MK';
    const confessionThursday10_11AM = 'ML';
    const confessionThursday11_12PM = 'MM';
    const confessionThursday12_1PM = 'MN';
    const confessionThursday1_2PM = 'MO';
    const confessionThursday2_3PM = 'MP';
    const confessionThursday3_4PM = 'MQ';
    const confessionThursday4_5PM = 'MR';
    const confessionThursday5_6PM = 'MS';
    const confessionThursday6_7PM = 'MT';
    const confessionThursday7_8PM = 'MU';
    const confessionThursday8_9PM = 'MV';
    const confessionThursday9_10PM = 'MW';

    // Friday Confession
    const confessionFriday5_6AM = 'MX';
    const confessionFriday6_7AM = 'MY';
    const confessionFriday7_8AM = 'MZ';
    const confessionFriday8_9AM = 'NA';
    const confessionFriday9_10AM = 'NB';
    const confessionFriday10_11AM = 'NC';
    const confessionFriday11_12PM = 'ND';
    const confessionFriday12_1PM = 'NE';
    const confessionFriday1_2PM = 'NF';
    const confessionFriday2_3PM = 'NG';
    const confessionFriday3_4PM = 'NH';
    const confessionFriday4_5PM = 'NI';
    const confessionFriday5_6PM = 'NJ';
    const confessionFriday6_7PM = 'NK';
    const confessionFriday7_8PM = 'NL';
    const confessionFriday8_9PM = 'NM';
    const confessionFriday9_10PM = 'NN';

    // Saturday Confession
    const confessionSaturday5_6AM = 'NO';
    const confessionSaturday6_7AM = 'NP';
    const confessionSaturday7_8AM = 'NQ';
    const confessionSaturday8_9AM = 'NR';
    const confessionSaturday9_10AM = 'NS';
    const confessionSaturday10_11AM = 'NT';
    const confessionSaturday11_12PM = 'NU';
    const confessionSaturday12_1PM = 'NV';
    const confessionSaturday1_2PM = 'NW';
    const confessionSaturday2_3PM = 'NX';
    const confessionSaturday3_4PM = 'NY';
    const confessionSaturday4_5PM = 'NZ';
    const confessionSaturday5_6PM = 'OA';
    const confessionSaturday6_7PM = 'OB';
    const confessionSaturday7_8PM = 'OC';
    const confessionSaturday8_9PM = 'OD';
    const confessionSaturday9_10PM = 'OE';

    const confessionScheduleRemarksColumn = 'OF';

    const adorationChapelScheduleColumn = 'OG';
    const isAdoration24HoursColumn = 'OH';

    const adorationScheduleSunday = 'OI';
    const adorationScheduleMonday = 'OJ';
    const adorationScheduleTuesday = 'OK';
    const adorationScheduleWednesday = 'OL';
    const adorationScheduleThursday = 'OM';
    const adorationScheduleFriday = 'ON';
    const adorationScheduleSaturday = 'OO';

    const baptismScheduleColumn = 'OP';
    const confirmationScheduleColumn = 'OQ';
    const weddingScheduleColumn = 'OR';
    const devotionColumn = 'OS';
    const officeHoursColumn = 'OT';
    const otherEventsColumn = 'OU';
    const churchHistoryColumn = 'OV';
    const churchPhotosColumn = 'OW';
    const metaDescriptionColumn = 'OX';
    const metaKeywordsColumn = 'OY';
    const remarksColumn = 'OZ';
    const tierColumn = 'PA';

    public static function adorations()
    {

    }

    public static function sundayAdorations()
    {
        return [
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::adoration
            ]
        ];
    }

    public static function confessions()
    {
        return array_merge(
            self::sundayConfessions(),
            self::mondayConfessions(),
            self::tuesdayConfessions(),
            self::wednesdayConfessions(),
            self::thursdayConfessions(),
            self::fridayConfessions(),
            self::saturdayConfessions()
        );
    }

    public static function sundayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday5_6AM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday6_7AM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday7_8AM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday8_9AM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday9_10AM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday10_11AM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday11_12PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday12_1PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday1_2PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday2_3PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday3_4PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday4_5PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday5_6PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday6_7PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday7_8PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday8_9PM
            ],
            [
                'schedule_id' => Schedule::SUNDAY,
                'schedule' => self::confessionSunday9_10PM
            ]
        ];
    }

    public static function mondayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday5_6AM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday6_7AM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday7_8AM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday8_9AM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday9_10AM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday10_11AM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday11_12PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday12_1PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday1_2PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday2_3PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday3_4PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday4_5PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday5_6PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday6_7PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday7_8PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday8_9PM
            ],
            [
                'schedule_id' => Schedule::MONDAY,
                'schedule' => self::confessionMonday9_10PM
            ]
        ];
    }

    public static function tuesdayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday5_6AM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday6_7AM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday7_8AM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday8_9AM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday9_10AM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday10_11AM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday11_12PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday12_1PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday1_2PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday2_3PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday3_4PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday4_5PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday5_6PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday6_7PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday7_8PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday8_9PM
            ],
            [
                'schedule_id' => Schedule::TUESDAY,
                'schedule' => self::confessionTuesday9_10PM
            ]
        ];
    }

    public static function wednesdayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday5_6AM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday6_7AM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday7_8AM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday8_9AM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday9_10AM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday10_11AM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday11_12PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday12_1PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday1_2PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday2_3PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday3_4PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday4_5PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday5_6PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday6_7PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday7_8PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday8_9PM
            ],
            [
                'schedule_id' => Schedule::WEDNESDAY,
                'schedule' => self::confessionWednesday9_10PM
            ]
        ];
    }

    public static function thursdayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday5_6AM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday6_7AM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday7_8AM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday8_9AM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday9_10AM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday10_11AM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday11_12PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday12_1PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday1_2PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday2_3PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday3_4PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday4_5PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday5_6PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday6_7PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday7_8PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday8_9PM
            ],
            [
                'schedule_id' => Schedule::THURSDAY,
                'schedule' => self::confessionThursday9_10PM
            ]
        ];
    }

    public static function fridayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday5_6AM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday6_7AM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday7_8AM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday8_9AM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday9_10AM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday10_11AM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday11_12PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday12_1PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday1_2PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday2_3PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday3_4PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday4_5PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday5_6PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday6_7PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday7_8PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday8_9PM
            ],
            [
                'schedule_id' => Schedule::FRIDAY,
                'schedule' => self::confessionFriday9_10PM
            ]
        ];
    }

    public static function saturdayConfessions()
    {
        return [
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday5_6AM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday6_7AM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday7_8AM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday8_9AM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday9_10AM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday10_11AM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday11_12PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday12_1PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday1_2PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday2_3PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday3_4PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday4_5PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday5_6PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday6_7PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday7_8PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday8_9PM
            ],
            [
                'schedule_id' => Schedule::SATURDAY,
                'schedule' => self::confessionSaturday9_10PM
            ]
        ];
    }

    public static function schedules()
    {
        return array_merge(
            self::sundaySchedules(),
            self::mondaySchedules(),
            self::tuesdaySchedules(),
            self::wednesdaySchedules(),
            self::thursdaySchedules(),
            self::fridaySchedules(),
            self::saturdaySchedules()
        );
    }

    public static function sundaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleSunday5_6AM,
                'language' => self::languageSunday5_6AM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday6_7AM,
                'language' => self::languageSunday6_7AM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday7_8AM,
                'language' => self::languageSunday7_8AM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday8_9AM,
                'language' => self::languageSunday8_9AM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday9_10AM,
                'language' => self::languageSunday9_10AM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday10_11AM,
                'language' => self::languageSunday10_11AM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday11_12PM,
                'language' => self::languageSunday11_12PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday12_1PM,
                'language' => self::languageSunday12_1PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday1_2PM,
                'language' => self::languageSunday1_2PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday2_3PM,
                'language' => self::languageSunday2_3PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday3_4PM,
                'language' => self::languageSunday3_4PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday4_5PM,
                'language' => self::languageSunday4_5PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday5_6PM,
                'language' => self::languageSunday5_6PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday6_7PM,
                'language' => self::languageSunday6_7PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday7_8PM,
                'language' => self::languageSunday7_8PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday8_9PM,
                'language' => self::languageSunday8_9PM,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::scheduleSunday9_10PM,
                'language' => self::languageSunday9_10PM,
                'schedule_id' => Schedule::SUNDAY
            ]
        ];
    }

    public static function mondaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleMonday5_6AM,
                'language' => self::languageMonday5_6AM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday6_7AM,
                'language' => self::languageMonday6_7AM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday7_8AM,
                'language' => self::languageMonday7_8AM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday8_9AM,
                'language' => self::languageMonday8_9AM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday9_10AM,
                'language' => self::languageMonday9_10AM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday10_11AM,
                'language' => self::languageMonday10_11AM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday11_12PM,
                'language' => self::languageMonday11_12PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday12_1PM,
                'language' => self::languageMonday12_1PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday1_2PM,
                'language' => self::languageMonday1_2PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday2_3PM,
                'language' => self::languageMonday2_3PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday3_4PM,
                'language' => self::languageMonday3_4PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday4_5PM,
                'language' => self::languageMonday4_5PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday5_6PM,
                'language' => self::languageMonday5_6PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday6_7PM,
                'language' => self::languageMonday6_7PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday7_8PM,
                'language' => self::languageMonday7_8PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday8_9PM,
                'language' => self::languageMonday8_9PM,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::scheduleMonday9_10PM,
                'language' => self::languageMonday9_10PM,
                'schedule_id' => Schedule::MONDAY
            ]
        ];
    }

    public static function tuesdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleTuesday5_6AM,
                'language' => self::languageTuesday5_6AM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday6_7AM,
                'language' => self::languageTuesday6_7AM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday7_8AM,
                'language' => self::languageTuesday7_8AM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday8_9AM,
                'language' => self::languageTuesday8_9AM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday9_10AM,
                'language' => self::languageTuesday9_10AM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday10_11AM,
                'language' => self::languageTuesday10_11AM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday11_12PM,
                'language' => self::languageTuesday11_12PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday12_1PM,
                'language' => self::languageTuesday12_1PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday1_2PM,
                'language' => self::languageTuesday1_2PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday2_3PM,
                'language' => self::languageTuesday2_3PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday3_4PM,
                'language' => self::languageTuesday3_4PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday4_5PM,
                'language' => self::languageTuesday4_5PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday5_6PM,
                'language' => self::languageTuesday5_6PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday6_7PM,
                'language' => self::languageTuesday6_7PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday7_8PM,
                'language' => self::languageTuesday7_8PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday8_9PM,
                'language' => self::languageTuesday8_9PM,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::scheduleTuesday9_10PM,
                'language' => self::languageTuesday9_10PM,
                'schedule_id' => Schedule::TUESDAY
            ]
        ];
    }

    public static function wednesdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleWednesday5_6AM,
                'language' => self::languageWednesday5_6AM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday6_7AM,
                'language' => self::languageWednesday6_7AM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday7_8AM,
                'language' => self::languageWednesday7_8AM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday8_9AM,
                'language' => self::languageWednesday8_9AM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday9_10AM,
                'language' => self::languageWednesday9_10AM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday10_11AM,
                'language' => self::languageWednesday10_11AM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday11_12PM,
                'language' => self::languageWednesday11_12PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday12_1PM,
                'language' => self::languageWednesday12_1PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday1_2PM,
                'language' => self::languageWednesday1_2PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday2_3PM,
                'language' => self::languageWednesday2_3PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday3_4PM,
                'language' => self::languageWednesday3_4PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday4_5PM,
                'language' => self::languageWednesday4_5PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday5_6PM,
                'language' => self::languageWednesday5_6PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday6_7PM,
                'language' => self::languageWednesday6_7PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday7_8PM,
                'language' => self::languageWednesday7_8PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday8_9PM,
                'language' => self::languageWednesday8_9PM,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::scheduleWednesday9_10PM,
                'language' => self::languageWednesday9_10PM,
                'schedule_id' => Schedule::WEDNESDAY
            ]
        ];
    }

    public static function thursdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleThursday5_6AM,
                'language' => self::languageThursday5_6AM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday6_7AM,
                'language' => self::languageThursday6_7AM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday7_8AM,
                'language' => self::languageThursday7_8AM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday8_9AM,
                'language' => self::languageThursday8_9AM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday9_10AM,
                'language' => self::languageThursday9_10AM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday10_11AM,
                'language' => self::languageThursday10_11AM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday11_12PM,
                'language' => self::languageThursday11_12PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday12_1PM,
                'language' => self::languageThursday12_1PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday1_2PM,
                'language' => self::languageThursday1_2PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday2_3PM,
                'language' => self::languageThursday2_3PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday3_4PM,
                'language' => self::languageThursday3_4PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday4_5PM,
                'language' => self::languageThursday4_5PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday5_6PM,
                'language' => self::languageThursday5_6PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday6_7PM,
                'language' => self::languageThursday6_7PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday7_8PM,
                'language' => self::languageThursday7_8PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday8_9PM,
                'language' => self::languageThursday8_9PM,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::scheduleThursday9_10PM,
                'language' => self::languageThursday9_10PM,
                'schedule_id' => Schedule::THURSDAY
            ]
        ];
    }

    public static function fridaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleFriday5_6AM,
                'language' => self::languageFriday5_6AM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday6_7AM,
                'language' => self::languageFriday6_7AM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday7_8AM,
                'language' => self::languageFriday7_8AM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday8_9AM,
                'language' => self::languageFriday8_9AM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday9_10AM,
                'language' => self::languageFriday9_10AM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday10_11AM,
                'language' => self::languageFriday10_11AM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday11_12PM,
                'language' => self::languageFriday11_12PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday12_1PM,
                'language' => self::languageFriday12_1PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday1_2PM,
                'language' => self::languageFriday1_2PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday2_3PM,
                'language' => self::languageFriday2_3PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday3_4PM,
                'language' => self::languageFriday3_4PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday4_5PM,
                'language' => self::languageFriday4_5PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday5_6PM,
                'language' => self::languageFriday5_6PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday6_7PM,
                'language' => self::languageFriday6_7PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday7_8PM,
                'language' => self::languageFriday7_8PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday8_9PM,
                'language' => self::languageFriday8_9PM,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::scheduleFriday9_10PM,
                'language' => self::languageFriday9_10PM,
                'schedule_id' => Schedule::FRIDAY
            ]
        ];
    }

    public static function saturdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleSaturday5_6AM,
                'language' => self::languageSaturday5_6AM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday6_7AM,
                'language' => self::languageSaturday6_7AM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday7_8AM,
                'language' => self::languageSaturday7_8AM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday8_9AM,
                'language' => self::languageSaturday8_9AM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday9_10AM,
                'language' => self::languageSaturday9_10AM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday10_11AM,
                'language' => self::languageSaturday10_11AM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday11_12PM,
                'language' => self::languageSaturday11_12PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday12_1PM,
                'language' => self::languageSaturday12_1PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday1_2PM,
                'language' => self::languageSaturday1_2PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday2_3PM,
                'language' => self::languageSaturday2_3PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday3_4PM,
                'language' => self::languageSaturday3_4PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday4_5PM,
                'language' => self::languageSaturday4_5PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday5_6PM,
                'language' => self::languageSaturday5_6PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday6_7PM,
                'language' => self::languageSaturday6_7PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday7_8PM,
                'language' => self::languageSaturday7_8PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday8_9PM,
                'language' => self::languageSaturday8_9PM,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::scheduleSaturday9_10PM,
                'language' => self::languageSaturday9_10PM,
                'schedule_id' => Schedule::SATURDAY
            ]
        ];
    }
}