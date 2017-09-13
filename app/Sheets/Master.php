<?php

namespace App\Sheets;


use App\Models\Schedule;
use App\Models\TimeStandard;

class Master
{
    const churchCodeColumn = 'G';
    const churchNameColumn = 'H';
    const lastUpdatedColumn = 'I';
    const latitudeColumn = 'J';
    const longitudeColumn = 'K';
    const fullAddressColumn = 'L';
    const streetColumn = 'M';
    const blockColumn = 'N';
    const townColumn = 'O';
    const stateColumn = 'P';
    const countryColumn = 'Q';
    const churchTypeColumn = 'R';
    const dateEstablishedColumn = 'S';
    const feastDayColumn = 'T';
    const priestColumn = 'U';
    const vicariateColumn = 'V';
    const dioceseColumn = 'W';
    const administeredByColumn = 'X';
    const contactColumn = 'Y';
    const websiteColumn = 'Z';
    const emailColumn = 'AA';
    const standaloneColumn = 'AB';
    const mallsColumn = 'AC';
    const schoolsColumn = 'AD';
    const hospitalsColumn = 'AE';
    const othersColumn = 'AF';
    const airConditionedColumn = 'AG';
    const ceilingFanColumn = 'AH';
    const ordinaryFanColumn = 'AI';
    const streetParkingColumn = 'AJ';
    const mallParkingColumn = 'AK';
    const privateChurchParkingColumn = 'AL';
    const otherParkingColumn = 'AM';
    const withAdorationColumn = 'AN';
    const AdorationHasAirConditionedColumn = 'AO';
    const AdorationHasElectricFanColumn = 'AP';

    // Sunday Schedules
    const scheduleSunday4_5AM = 'AQ';
    const scheduleSunday5_6AM = 'AR';
    const scheduleSunday6_7AM = 'AS';
    const scheduleSunday7_8AM = 'AT';
    const scheduleSunday8_9AM = 'AU';
    const scheduleSunday9_10AM = 'AV';
    const scheduleSunday10_11AM = 'AW';
    const scheduleSunday11_12PM = 'AX';
    const scheduleSunday12_1PM = 'AY';
    const scheduleSunday1_2PM = 'AZ';
    const scheduleSunday2_3PM = 'BA';
    const scheduleSunday3_4PM = 'BB';
    const scheduleSunday4_5PM = 'BC';
    const scheduleSunday5_6PM = 'BD';
    const scheduleSunday6_7PM = 'BE';
    const scheduleSunday7_8PM = 'BF';
    const scheduleSunday8_9PM = 'BG';
    const scheduleSunday9_10PM = 'BH';

    // Monday Schedules
    const scheduleMonday4_5AM = 'BI';
    const scheduleMonday5_6AM = 'BJ';
    const scheduleMonday6_7AM = 'BK';
    const scheduleMonday7_8AM = 'BL';
    const scheduleMonday8_9AM = 'BM';
    const scheduleMonday9_10AM = 'BN';
    const scheduleMonday10_11AM = 'BO';
    const scheduleMonday11_12PM = 'BP';
    const scheduleMonday12_1PM = 'BQ';
    const scheduleMonday1_2PM = 'BR';
    const scheduleMonday2_3PM = 'BS';
    const scheduleMonday3_4PM = 'BT';
    const scheduleMonday4_5PM = 'BU';
    const scheduleMonday5_6PM = 'BV';
    const scheduleMonday6_7PM = 'BW';
    const scheduleMonday7_8PM = 'BX';
    const scheduleMonday8_9PM = 'BY';
    const scheduleMonday9_10PM = 'BZ';

    // Tuesday Schedules
    const scheduleTuesday4_5AM = 'CA';
    const scheduleTuesday5_6AM = 'CB';
    const scheduleTuesday6_7AM = 'CC';
    const scheduleTuesday7_8AM = 'CD';
    const scheduleTuesday8_9AM = 'CE';
    const scheduleTuesday9_10AM = 'CF';
    const scheduleTuesday10_11AM = 'CG';
    const scheduleTuesday11_12PM = 'CH';
    const scheduleTuesday12_1PM = 'CI';
    const scheduleTuesday1_2PM = 'CJ';
    const scheduleTuesday2_3PM = 'CK';
    const scheduleTuesday3_4PM = 'CL';
    const scheduleTuesday4_5PM = 'CM';
    const scheduleTuesday5_6PM = 'CN';
    const scheduleTuesday6_7PM = 'CO';
    const scheduleTuesday7_8PM = 'CP';
    const scheduleTuesday8_9PM = 'CQ';
    const scheduleTuesday9_10PM = 'CR';

    // Wednesday Schedules
    const scheduleWednesday4_5AM = 'CS';
    const scheduleWednesday5_6AM = 'CT';
    const scheduleWednesday6_7AM = 'CU';
    const scheduleWednesday7_8AM = 'CV';
    const scheduleWednesday8_9AM = 'CW';
    const scheduleWednesday9_10AM = 'CX';
    const scheduleWednesday10_11AM = 'CY';
    const scheduleWednesday11_12PM = 'CZ';
    const scheduleWednesday12_1PM = 'CA';
    const scheduleWednesday1_2PM = 'CB';
    const scheduleWednesday2_3PM = 'CC';
    const scheduleWednesday3_4PM = 'CD';
    const scheduleWednesday4_5PM = 'CE';
    const scheduleWednesday5_6PM = 'CF';
    const scheduleWednesday6_7PM = 'CG';
    const scheduleWednesday7_8PM = 'CH';
    const scheduleWednesday8_9PM = 'DI';
    const scheduleWednesday9_10PM = 'DJ';

    // Thursday Schedules
    const scheduleThursday4_5AM = 'DK';
    const scheduleThursday5_6AM = 'DL';
    const scheduleThursday6_7AM = 'DM';
    const scheduleThursday7_8AM = 'DN';
    const scheduleThursday8_9AM = 'DO';
    const scheduleThursday9_10AM = 'DP';
    const scheduleThursday10_11AM = 'DQ';
    const scheduleThursday11_12PM = 'DR';
    const scheduleThursday12_1PM = 'DS';
    const scheduleThursday1_2PM = 'DT';
    const scheduleThursday2_3PM = 'DU';
    const scheduleThursday3_4PM = 'DV';
    const scheduleThursday4_5PM = 'DW';
    const scheduleThursday5_6PM = 'DX';
    const scheduleThursday6_7PM = 'DY';
    const scheduleThursday7_8PM = 'DZ';
    const scheduleThursday8_9PM = 'EA';
    const scheduleThursday9_10PM = 'EB';

    // Friday Schedules
    const scheduleFriday4_5AM = 'EC';
    const scheduleFriday5_6AM = 'ED';
    const scheduleFriday6_7AM = 'EE';
    const scheduleFriday7_8AM = 'EF';
    const scheduleFriday8_9AM = 'EG';
    const scheduleFriday9_10AM = 'EH';
    const scheduleFriday10_11AM = 'EI';
    const scheduleFriday11_12PM = 'EJ';
    const scheduleFriday12_1PM = 'EK';
    const scheduleFriday1_2PM = 'EL';
    const scheduleFriday2_3PM = 'EM';
    const scheduleFriday3_4PM = 'EN';
    const scheduleFriday4_5PM = 'EO';
    const scheduleFriday5_6PM = 'EP';
    const scheduleFriday6_7PM = 'EQ';
    const scheduleFriday7_8PM = 'ER';
    const scheduleFriday8_9PM = 'ES';
    const scheduleFriday9_10PM = 'ET';

    // Saturday Schedules
    const scheduleSaturday4_5AM = 'EU';
    const scheduleSaturday5_6AM = 'EV';
    const scheduleSaturday6_7AM = 'EW';
    const scheduleSaturday7_8AM = 'EX';
    const scheduleSaturday8_9AM = 'EY';
    const scheduleSaturday9_10AM = 'EZ';
    const scheduleSaturday10_11AM = 'FA';
    const scheduleSaturday11_12PM = 'FB';
    const scheduleSaturday12_1PM = 'FC';
    const scheduleSaturday1_2PM = 'FD';
    const scheduleSaturday2_3PM = 'FE';
    const scheduleSaturday3_4PM = 'FF';
    const scheduleSaturday4_5PM = 'FG';
    const scheduleSaturday5_6PM = 'FH';
    const scheduleSaturday6_7PM = 'FI';
    const scheduleSaturday7_8PM = 'FJ';
    const scheduleSaturday8_9PM = 'FK';
    const scheduleSaturday9_10PM = 'FL';

    // Sunday Language
    const languageSunday4_5AM = 'FM';
    const languageSunday5_6AM = 'FN';
    const languageSunday6_7AM = 'FO';
    const languageSunday7_8AM = 'FP';
    const languageSunday8_9AM = 'FQ';
    const languageSunday9_10AM = 'FR';
    const languageSunday10_11AM = 'FS';
    const languageSunday11_12PM = 'FT';
    const languageSunday12_1PM = 'FU';
    const languageSunday1_2PM = 'FV';
    const languageSunday2_3PM = 'FW';
    const languageSunday3_4PM = 'FX';
    const languageSunday4_5PM = 'FY';
    const languageSunday5_6PM = 'FZ';
    const languageSunday6_7PM = 'GA';
    const languageSunday7_8PM = 'GB';
    const languageSunday8_9PM = 'GC';
    const languageSunday9_10PM = 'GD';

    // Monday Language
    const languageMonday4_5AM = 'GE';
    const languageMonday5_6AM = 'GF';
    const languageMonday6_7AM = 'GG';
    const languageMonday7_8AM = 'GH';
    const languageMonday8_9AM = 'GI';
    const languageMonday9_10AM = 'GJ';
    const languageMonday10_11AM = 'GK';
    const languageMonday11_12PM = 'GL';
    const languageMonday12_1PM = 'GM';
    const languageMonday1_2PM = 'GN';
    const languageMonday2_3PM = 'GO';
    const languageMonday3_4PM = 'GP';
    const languageMonday4_5PM = 'GQ';
    const languageMonday5_6PM = 'GR';
    const languageMonday6_7PM = 'GS';
    const languageMonday7_8PM = 'GT';
    const languageMonday8_9PM = 'GU';
    const languageMonday9_10PM = 'GV';

    // Tuesday Language
    const languageTuesday4_5AM = 'GW';
    const languageTuesday5_6AM = 'GX';
    const languageTuesday6_7AM = 'GY';
    const languageTuesday7_8AM = 'GZ';
    const languageTuesday8_9AM = 'HA';
    const languageTuesday9_10AM = 'HB';
    const languageTuesday10_11AM = 'HC';
    const languageTuesday11_12PM = 'HD';
    const languageTuesday12_1PM = 'HE';
    const languageTuesday1_2PM = 'HF';
    const languageTuesday2_3PM = 'HG';
    const languageTuesday3_4PM = 'HH';
    const languageTuesday4_5PM = 'HI';
    const languageTuesday5_6PM = 'HJ';
    const languageTuesday6_7PM = 'HK';
    const languageTuesday7_8PM = 'HL';
    const languageTuesday8_9PM = 'HM';
    const languageTuesday9_10PM = 'HN';

    // Wednesday Language
    const languageWednesday4_5AM = 'HO';
    const languageWednesday5_6AM = 'HP';
    const languageWednesday6_7AM = 'HQ';
    const languageWednesday7_8AM = 'HR';
    const languageWednesday8_9AM = 'HS';
    const languageWednesday9_10AM = 'HT';
    const languageWednesday10_11AM = 'HU';
    const languageWednesday11_12PM = 'HV';
    const languageWednesday12_1PM = 'HW';
    const languageWednesday1_2PM = 'HX';
    const languageWednesday2_3PM = 'HY';
    const languageWednesday3_4PM = 'HZ';
    const languageWednesday4_5PM = 'IA';
    const languageWednesday5_6PM = 'IB';
    const languageWednesday6_7PM = 'IC';
    const languageWednesday7_8PM = 'ID';
    const languageWednesday8_9PM = 'IE';
    const languageWednesday9_10PM = 'IF';

    // Thursday Language
    const languageThursday4_5AM = 'IG';
    const languageThursday5_6AM = 'IH';
    const languageThursday6_7AM = 'II';
    const languageThursday7_8AM = 'IJ';
    const languageThursday8_9AM = 'IK';
    const languageThursday9_10AM = 'IL';
    const languageThursday10_11AM = 'IM';
    const languageThursday11_12PM = 'IN';
    const languageThursday12_1PM = 'IO';
    const languageThursday1_2PM = 'IP';
    const languageThursday2_3PM = 'IQ';
    const languageThursday3_4PM = 'IR';
    const languageThursday4_5PM = 'IS';
    const languageThursday5_6PM = 'IT';
    const languageThursday6_7PM = 'IU';
    const languageThursday7_8PM = 'IV';
    const languageThursday8_9PM = 'IW';
    const languageThursday9_10PM = 'IX';

    // Friday Language
    const languageFriday4_5AM = 'IY';
    const languageFriday5_6AM = 'IZ';
    const languageFriday6_7AM = 'JA';
    const languageFriday7_8AM = 'JB';
    const languageFriday8_9AM = 'JC';
    const languageFriday9_10AM = 'JD';
    const languageFriday10_11AM = 'JE';
    const languageFriday11_12PM = 'JF';
    const languageFriday12_1PM = 'JG';
    const languageFriday1_2PM = 'JH';
    const languageFriday2_3PM = 'JI';
    const languageFriday3_4PM = 'JJ';
    const languageFriday4_5PM = 'JK';
    const languageFriday5_6PM = 'JL';
    const languageFriday6_7PM = 'JM';
    const languageFriday7_8PM = 'JN';
    const languageFriday8_9PM = 'JO';
    const languageFriday9_10PM = 'JP';

    // Saturday Language
    const languageSaturday4_5AM = 'JQ';
    const languageSaturday5_6AM = 'JR';
    const languageSaturday6_7AM = 'JS';
    const languageSaturday7_8AM = 'JT';
    const languageSaturday8_9AM = 'JU';
    const languageSaturday9_10AM = 'JV';
    const languageSaturday10_11AM = 'JW';
    const languageSaturday11_12PM = 'JX';
    const languageSaturday12_1PM = 'JY';
    const languageSaturday1_2PM = 'JZ';
    const languageSaturday2_3PM = 'KA';
    const languageSaturday3_4PM = 'KB';
    const languageSaturday4_5PM = 'KC';
    const languageSaturday5_6PM = 'KD';
    const languageSaturday6_7PM = 'KE';
    const languageSaturday7_8PM = 'KF';
    const languageSaturday8_9PM = 'KG';
    const languageSaturday9_10PM = 'KH';

    const confessionScheduleDisplayColumn = 'KI';

    // Sunday Confession
    const confessionSunday4_5AM = 'KJ';
    const confessionSunday5_6AM = 'KK';
    const confessionSunday6_7AM = 'KL';
    const confessionSunday7_8AM = 'KM';
    const confessionSunday8_9AM = 'KN';
    const confessionSunday9_10AM = 'KO';
    const confessionSunday10_11AM = 'KP';
    const confessionSunday11_12PM = 'KQ';
    const confessionSunday12_1PM = 'KR';
    const confessionSunday1_2PM = 'KS';
    const confessionSunday2_3PM = 'KT';
    const confessionSunday3_4PM = 'KU';
    const confessionSunday4_5PM = 'KV';
    const confessionSunday5_6PM = 'KW';
    const confessionSunday6_7PM = 'KX';
    const confessionSunday7_8PM = 'KY';
    const confessionSunday8_9PM = 'KZ';
    const confessionSunday9_10PM = 'LA';

    // Monday Confession
    const confessionMonday4_5AM = 'LB';
    const confessionMonday5_6AM = 'LC';
    const confessionMonday6_7AM = 'LD';
    const confessionMonday7_8AM = 'LE';
    const confessionMonday8_9AM = 'LF';
    const confessionMonday9_10AM = 'LG';
    const confessionMonday10_11AM = 'LH';
    const confessionMonday11_12PM = 'LI';
    const confessionMonday12_1PM = 'LJ';
    const confessionMonday1_2PM = 'LK';
    const confessionMonday2_3PM = 'LL';
    const confessionMonday3_4PM = 'LM';
    const confessionMonday4_5PM = 'LN';
    const confessionMonday5_6PM = 'LO';
    const confessionMonday6_7PM = 'LP';
    const confessionMonday7_8PM = 'LQ';
    const confessionMonday8_9PM = 'LR';
    const confessionMonday9_10PM = 'LS';

    // Tuesday Confession
    const confessionTuesday4_5AM = 'LT';
    const confessionTuesday5_6AM = 'LU';
    const confessionTuesday6_7AM = 'LV';
    const confessionTuesday7_8AM = 'LW';
    const confessionTuesday8_9AM = 'LX';
    const confessionTuesday9_10AM = 'LY';
    const confessionTuesday10_11AM = 'LZ';
    const confessionTuesday11_12PM = 'MA';
    const confessionTuesday12_1PM = 'MB';
    const confessionTuesday1_2PM = 'MC';
    const confessionTuesday2_3PM = 'MD';
    const confessionTuesday3_4PM = 'ME';
    const confessionTuesday4_5PM = 'MF';
    const confessionTuesday5_6PM = 'MG';
    const confessionTuesday6_7PM = 'MH';
    const confessionTuesday7_8PM = 'MI';
    const confessionTuesday8_9PM = 'MJ';
    const confessionTuesday9_10PM = 'MK';

    // Wednesday Confession
    const confessionWednesday4_5AM = 'ML';
    const confessionWednesday5_6AM = 'MM';
    const confessionWednesday6_7AM = 'MN';
    const confessionWednesday7_8AM = 'MO';
    const confessionWednesday8_9AM = 'MP';
    const confessionWednesday9_10AM = 'MQ';
    const confessionWednesday10_11AM = 'MR';
    const confessionWednesday11_12PM = 'MS';
    const confessionWednesday12_1PM = 'MT';
    const confessionWednesday1_2PM = 'MU';
    const confessionWednesday2_3PM = 'MV';
    const confessionWednesday3_4PM = 'MW';
    const confessionWednesday4_5PM = 'MX';
    const confessionWednesday5_6PM = 'MY';
    const confessionWednesday6_7PM = 'MZ';
    const confessionWednesday7_8PM = 'NA';
    const confessionWednesday8_9PM = 'NB';
    const confessionWednesday9_10PM = 'NC';

    // Thursday Confession
    const confessionThursday4_5AM = 'ND';
    const confessionThursday5_6AM = 'NE';
    const confessionThursday6_7AM = 'NF';
    const confessionThursday7_8AM = 'NG';
    const confessionThursday8_9AM = 'NH';
    const confessionThursday9_10AM = 'NI';
    const confessionThursday10_11AM = 'NJ';
    const confessionThursday11_12PM = 'NK';
    const confessionThursday12_1PM = 'NL';
    const confessionThursday1_2PM = 'NM';
    const confessionThursday2_3PM = 'NN';
    const confessionThursday3_4PM = 'NO';
    const confessionThursday4_5PM = 'NP';
    const confessionThursday5_6PM = 'NQ';
    const confessionThursday6_7PM = 'NR';
    const confessionThursday7_8PM = 'NS';
    const confessionThursday8_9PM = 'NT';
    const confessionThursday9_10PM = 'NU';

    // Friday Confession
    const confessionFriday4_5AM = 'NV';
    const confessionFriday5_6AM = 'NW';
    const confessionFriday6_7AM = 'NX';
    const confessionFriday7_8AM = 'NY';
    const confessionFriday8_9AM = 'NZ';
    const confessionFriday9_10AM = 'OA';
    const confessionFriday10_11AM = 'OB';
    const confessionFriday11_12PM = 'OC';
    const confessionFriday12_1PM = 'OD';
    const confessionFriday1_2PM = 'OE';
    const confessionFriday2_3PM = 'OF';
    const confessionFriday3_4PM = 'OG';
    const confessionFriday4_5PM = 'OH';
    const confessionFriday5_6PM = 'OI';
    const confessionFriday6_7PM = 'OJ';
    const confessionFriday7_8PM = 'OK';
    const confessionFriday8_9PM = 'OL';
    const confessionFriday9_10PM = 'OM';

    // Saturday Confession
    const confessionSaturday4_5AM = 'ON';
    const confessionSaturday5_6AM = 'OO';
    const confessionSaturday6_7AM = 'OP';
    const confessionSaturday7_8AM = 'OQ';
    const confessionSaturday8_9AM = 'OR';
    const confessionSaturday9_10AM = 'OS';
    const confessionSaturday10_11AM = 'OT';
    const confessionSaturday11_12PM = 'OU';
    const confessionSaturday12_1PM = 'OV';
    const confessionSaturday1_2PM = 'OW';
    const confessionSaturday2_3PM = 'OX';
    const confessionSaturday3_4PM = 'OY';
    const confessionSaturday4_5PM = 'OZ';
    const confessionSaturday5_6PM = 'PA';
    const confessionSaturday6_7PM = 'PB';
    const confessionSaturday7_8PM = 'PC';
    const confessionSaturday8_9PM = 'PD';
    const confessionSaturday9_10PM = 'PE';

    const adorationChapelScheduleColumn = 'PF';
    const isAdoration24HoursColumn = 'PG';

    // Sunday Adoration
    const adorationSunday4_5AM = 'PH';
    const adorationSunday5_6AM = 'PI';
    const adorationSunday6_7AM = 'PJ';
    const adorationSunday7_8AM = 'PK';
    const adorationSunday8_9AM = 'PL';
    const adorationSunday9_10AM = 'PM';
    const adorationSunday10_11AM = 'PN';
    const adorationSunday11_12PM = 'PO';
    const adorationSunday12_1PM = 'PP';
    const adorationSunday1_2PM = 'PQ';
    const adorationSunday2_3PM = 'PR';
    const adorationSunday3_4PM = 'PS';
    const adorationSunday4_5PM = 'PT';
    const adorationSunday5_6PM = 'PU';
    const adorationSunday6_7PM = 'PV';
    const adorationSunday7_8PM = 'PW';
    const adorationSunday8_9PM = 'PX';
    const adorationSunday9_10PM = 'PY';

    // Monday Adoration
    const adorationMonday4_5AM = 'PZ';
    const adorationMonday5_6AM = 'QA';
    const adorationMonday6_7AM = 'QB';
    const adorationMonday7_8AM = 'QC';
    const adorationMonday8_9AM = 'QD';
    const adorationMonday9_10AM = 'QE';
    const adorationMonday10_11AM = 'QF';
    const adorationMonday11_12PM = 'QG';
    const adorationMonday12_1PM = 'QH';
    const adorationMonday1_2PM = 'QI';
    const adorationMonday2_3PM = 'QJ';
    const adorationMonday3_4PM = 'QK';
    const adorationMonday4_5PM = 'QL';
    const adorationMonday5_6PM = 'QM';
    const adorationMonday6_7PM = 'QN';
    const adorationMonday7_8PM = 'QO';
    const adorationMonday8_9PM = 'QP';
    const adorationMonday9_10PM = 'QQ';

    // Tuesday Adoration
    const adorationTuesday4_5AM = 'QR';
    const adorationTuesday5_6AM = 'QS';
    const adorationTuesday6_7AM = 'QT';
    const adorationTuesday7_8AM = 'QU';
    const adorationTuesday8_9AM = 'QV';
    const adorationTuesday9_10AM = 'QW';
    const adorationTuesday10_11AM = 'QX';
    const adorationTuesday11_12PM = 'QY';
    const adorationTuesday12_1PM = 'QZ';
    const adorationTuesday1_2PM = 'RA';
    const adorationTuesday2_3PM = 'RB';
    const adorationTuesday3_4PM = 'RC';
    const adorationTuesday4_5PM = 'RD';
    const adorationTuesday5_6PM = 'RE';
    const adorationTuesday6_7PM = 'RF';
    const adorationTuesday7_8PM = 'RG';
    const adorationTuesday8_9PM = 'RH';
    const adorationTuesday9_10PM = 'RI';

    // Wednesday Adoration
    const adorationWednesday4_5AM = 'RJ';
    const adorationWednesday5_6AM = 'RK';
    const adorationWednesday6_7AM = 'RL';
    const adorationWednesday7_8AM = 'RM';
    const adorationWednesday8_9AM = 'RN';
    const adorationWednesday9_10AM = 'RO';
    const adorationWednesday10_11AM = 'RP';
    const adorationWednesday11_12PM = 'RQ';
    const adorationWednesday12_1PM = 'RR';
    const adorationWednesday1_2PM = 'RS';
    const adorationWednesday2_3PM = 'RT';
    const adorationWednesday3_4PM = 'RU';
    const adorationWednesday4_5PM = 'RV';
    const adorationWednesday5_6PM = 'RW';
    const adorationWednesday6_7PM = 'RX';
    const adorationWednesday7_8PM = 'RY';
    const adorationWednesday8_9PM = 'RZ';
    const adorationWednesday9_10PM = 'SA';

    // Thursday Adoration
    const adorationThursday4_5AM = 'SB';
    const adorationThursday5_6AM = 'SC';
    const adorationThursday6_7AM = 'SD';
    const adorationThursday7_8AM = 'SE';
    const adorationThursday8_9AM = 'SF';
    const adorationThursday9_10AM = 'SG';
    const adorationThursday10_11AM = 'SH';
    const adorationThursday11_12PM = 'SI';
    const adorationThursday12_1PM = 'SJ';
    const adorationThursday1_2PM = 'SK';
    const adorationThursday2_3PM = 'SL';
    const adorationThursday3_4PM = 'SM';
    const adorationThursday4_5PM = 'SN';
    const adorationThursday5_6PM = 'SO';
    const adorationThursday6_7PM = 'SP';
    const adorationThursday7_8PM = 'SQ';
    const adorationThursday8_9PM = 'SR';
    const adorationThursday9_10PM = 'SS';

    // Friday Confession
    const adorationFriday4_5AM = 'ST';
    const adorationFriday5_6AM = 'SU';
    const adorationFriday6_7AM = 'SV';
    const adorationFriday7_8AM = 'SW';
    const adorationFriday8_9AM = 'SX';
    const adorationFriday9_10AM = 'SY';
    const adorationFriday10_11AM = 'SZ';
    const adorationFriday11_12PM = 'TA';
    const adorationFriday12_1PM = 'TB';
    const adorationFriday1_2PM = 'TC';
    const adorationFriday2_3PM = 'TD';
    const adorationFriday3_4PM = 'TE';
    const adorationFriday4_5PM = 'TF';
    const adorationFriday5_6PM = 'TG';
    const adorationFriday6_7PM = 'TH';
    const adorationFriday7_8PM = 'TI';
    const adorationFriday8_9PM = 'TJ';
    const adorationFriday9_10PM = 'TK';

    // Saturday Adoration
    const adorationSaturday4_5AM = 'TL';
    const adorationSaturday5_6AM = 'TM';
    const adorationSaturday6_7AM = 'TN';
    const adorationSaturday7_8AM = 'TO';
    const adorationSaturday8_9AM = 'TP';
    const adorationSaturday9_10AM = 'TQ';
    const adorationSaturday10_11AM = 'TR';
    const adorationSaturday11_12PM = 'TS';
    const adorationSaturday12_1PM = 'TT';
    const adorationSaturday1_2PM = 'TU';
    const adorationSaturday2_3PM = 'TV';
    const adorationSaturday3_4PM = 'TW';
    const adorationSaturday4_5PM = 'TX';
    const adorationSaturday5_6PM = 'TY';
    const adorationSaturday6_7PM = 'TZ';
    const adorationSaturday7_8PM = 'UA';
    const adorationSaturday8_9PM = 'UB';
    const adorationSaturday9_10PM = 'UC';

    const baptismScheduleColumn = 'UD';
    const weddingScheduleColumn = 'UE';
    const devotionColumn = 'UF';
    const officeHoursColumn = 'UG';
    const otherEventsColumn = 'UH';
    const churchHistoryColumn = 'UI';
    const churchPhotosColumn = 'UJ';
    const metaTitleColumn = 'UK';
    const metaDescriptionColumn = 'UL';
    const metaKeywordsColumn = 'UM';
    const tierColumn = 'UN';

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
                'schedule' => self::scheduleSunday4_5AM,
                'language' => self::languageSunday4_5AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleSunday5_6AM,
                'language' => self::languageSunday5_6AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleSunday6_7AM,
                'language' => self::languageSunday6_7AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleSunday7_8AM,
                'language' => self::languageSunday7_8AM,
                'schedule_id' => Schedule::SUNDAY
                ,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleSunday8_9AM,
                'language' => self::languageSunday8_9AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleSunday9_10AM,
                'language' => self::languageSunday9_10AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleSunday10_11AM,
                'language' => self::languageSunday10_11AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleSunday11_12PM,
                'language' => self::languageSunday11_12PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleSunday12_1PM,
                'language' => self::languageSunday12_1PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleSunday1_2PM,
                'language' => self::languageSunday1_2PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleSunday2_3PM,
                'language' => self::languageSunday2_3PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleSunday3_4PM,
                'language' => self::languageSunday3_4PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleSunday4_5PM,
                'language' => self::languageSunday4_5PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleSunday5_6PM,
                'language' => self::languageSunday5_6PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleSunday6_7PM,
                'language' => self::languageSunday6_7PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleSunday7_8PM,
                'language' => self::languageSunday7_8PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleSunday8_9PM,
                'language' => self::languageSunday8_9PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleSunday9_10PM,
                'language' => self::languageSunday9_10PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function mondaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleMonday4_5AM,
                'language' => self::languageMonday4_5AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleMonday5_6AM,
                'language' => self::languageMonday5_6AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleMonday6_7AM,
                'language' => self::languageMonday6_7AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleMonday7_8AM,
                'language' => self::languageMonday7_8AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleMonday8_9AM,
                'language' => self::languageMonday8_9AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleMonday9_10AM,
                'language' => self::languageMonday9_10AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleMonday10_11AM,
                'language' => self::languageMonday10_11AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleMonday11_12PM,
                'language' => self::languageMonday11_12PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleMonday12_1PM,
                'language' => self::languageMonday12_1PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleMonday1_2PM,
                'language' => self::languageMonday1_2PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleMonday2_3PM,
                'language' => self::languageMonday2_3PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleMonday3_4PM,
                'language' => self::languageMonday3_4PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleMonday4_5PM,
                'language' => self::languageMonday4_5PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleMonday5_6PM,
                'language' => self::languageMonday5_6PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleMonday6_7PM,
                'language' => self::languageMonday6_7PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleMonday7_8PM,
                'language' => self::languageMonday7_8PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleMonday8_9PM,
                'language' => self::languageMonday8_9PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleMonday9_10PM,
                'language' => self::languageMonday9_10PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function tuesdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleTuesday4_5AM,
                'language' => self::languageTuesday4_5AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleTuesday5_6AM,
                'language' => self::languageTuesday5_6AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleTuesday6_7AM,
                'language' => self::languageTuesday6_7AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleTuesday7_8AM,
                'language' => self::languageTuesday7_8AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleTuesday8_9AM,
                'language' => self::languageTuesday8_9AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleTuesday9_10AM,
                'language' => self::languageTuesday9_10AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleTuesday10_11AM,
                'language' => self::languageTuesday10_11AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleTuesday11_12PM,
                'language' => self::languageTuesday11_12PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleTuesday12_1PM,
                'language' => self::languageTuesday12_1PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleTuesday1_2PM,
                'language' => self::languageTuesday1_2PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleTuesday2_3PM,
                'language' => self::languageTuesday2_3PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleTuesday3_4PM,
                'language' => self::languageTuesday3_4PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleTuesday4_5PM,
                'language' => self::languageTuesday4_5PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleTuesday5_6PM,
                'language' => self::languageTuesday5_6PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleTuesday6_7PM,
                'language' => self::languageTuesday6_7PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleTuesday7_8PM,
                'language' => self::languageTuesday7_8PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleTuesday8_9PM,
                'language' => self::languageTuesday8_9PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleTuesday9_10PM,
                'language' => self::languageTuesday9_10PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function wednesdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleWednesday4_5AM,
                'language' => self::languageWednesday4_5AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleWednesday5_6AM,
                'language' => self::languageWednesday5_6AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleWednesday6_7AM,
                'language' => self::languageWednesday6_7AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleWednesday7_8AM,
                'language' => self::languageWednesday7_8AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleWednesday8_9AM,
                'language' => self::languageWednesday8_9AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleWednesday9_10AM,
                'language' => self::languageWednesday9_10AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleWednesday10_11AM,
                'language' => self::languageWednesday10_11AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleWednesday11_12PM,
                'language' => self::languageWednesday11_12PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleWednesday12_1PM,
                'language' => self::languageWednesday12_1PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleWednesday1_2PM,
                'language' => self::languageWednesday1_2PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleWednesday2_3PM,
                'language' => self::languageWednesday2_3PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleWednesday3_4PM,
                'language' => self::languageWednesday3_4PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleWednesday4_5PM,
                'language' => self::languageWednesday4_5PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleWednesday5_6PM,
                'language' => self::languageWednesday5_6PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleWednesday6_7PM,
                'language' => self::languageWednesday6_7PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleWednesday7_8PM,
                'language' => self::languageWednesday7_8PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleWednesday8_9PM,
                'language' => self::languageWednesday8_9PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleWednesday9_10PM,
                'language' => self::languageWednesday9_10PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function thursdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleThursday4_5AM,
                'language' => self::languageThursday4_5AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleThursday5_6AM,
                'language' => self::languageThursday5_6AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleThursday6_7AM,
                'language' => self::languageThursday6_7AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleThursday7_8AM,
                'language' => self::languageThursday7_8AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleThursday8_9AM,
                'language' => self::languageThursday8_9AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleThursday9_10AM,
                'language' => self::languageThursday9_10AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleThursday10_11AM,
                'language' => self::languageThursday10_11AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleThursday11_12PM,
                'language' => self::languageThursday11_12PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleThursday12_1PM,
                'language' => self::languageThursday12_1PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleThursday1_2PM,
                'language' => self::languageThursday1_2PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleThursday2_3PM,
                'language' => self::languageThursday2_3PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleThursday3_4PM,
                'language' => self::languageThursday3_4PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleThursday4_5PM,
                'language' => self::languageThursday4_5PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleThursday5_6PM,
                'language' => self::languageThursday5_6PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleThursday6_7PM,
                'language' => self::languageThursday6_7PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleThursday7_8PM,
                'language' => self::languageThursday7_8PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleThursday8_9PM,
                'language' => self::languageThursday8_9PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleThursday9_10PM,
                'language' => self::languageThursday9_10PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function fridaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleFriday4_5AM,
                'language' => self::languageFriday4_5AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleFriday5_6AM,
                'language' => self::languageFriday5_6AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleFriday6_7AM,
                'language' => self::languageFriday6_7AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleFriday7_8AM,
                'language' => self::languageFriday7_8AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleFriday8_9AM,
                'language' => self::languageFriday8_9AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleFriday9_10AM,
                'language' => self::languageFriday9_10AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleFriday10_11AM,
                'language' => self::languageFriday10_11AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleFriday11_12PM,
                'language' => self::languageFriday11_12PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleFriday12_1PM,
                'language' => self::languageFriday12_1PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleFriday1_2PM,
                'language' => self::languageFriday1_2PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleFriday2_3PM,
                'language' => self::languageFriday2_3PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleFriday3_4PM,
                'language' => self::languageFriday3_4PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleFriday4_5PM,
                'language' => self::languageFriday4_5PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleFriday5_6PM,
                'language' => self::languageFriday5_6PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleFriday6_7PM,
                'language' => self::languageFriday6_7PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleFriday7_8PM,
                'language' => self::languageFriday7_8PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleFriday8_9PM,
                'language' => self::languageFriday8_9PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleFriday9_10PM,
                'language' => self::languageFriday9_10PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function saturdaySchedules()
    {
        return [
            [
                'schedule' => self::scheduleSaturday4_5AM,
                'language' => self::languageSaturday4_5AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::scheduleSaturday5_6AM,
                'language' => self::languageSaturday5_6AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::scheduleSaturday6_7AM,
                'language' => self::languageSaturday6_7AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::scheduleSaturday7_8AM,
                'language' => self::languageSaturday7_8AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::scheduleSaturday8_9AM,
                'language' => self::languageSaturday8_9AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::scheduleSaturday9_10AM,
                'language' => self::languageSaturday9_10AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::scheduleSaturday10_11AM,
                'language' => self::languageSaturday10_11AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::scheduleSaturday11_12PM,
                'language' => self::languageSaturday11_12PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::scheduleSaturday12_1PM,
                'language' => self::languageSaturday12_1PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::scheduleSaturday1_2PM,
                'language' => self::languageSaturday1_2PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::scheduleSaturday2_3PM,
                'language' => self::languageSaturday2_3PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::scheduleSaturday3_4PM,
                'language' => self::languageSaturday3_4PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::scheduleSaturday4_5PM,
                'language' => self::languageSaturday4_5PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::scheduleSaturday5_6PM,
                'language' => self::languageSaturday5_6PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::scheduleSaturday6_7PM,
                'language' => self::languageSaturday6_7PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::scheduleSaturday7_8PM,
                'language' => self::languageSaturday7_8PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::scheduleSaturday8_9PM,
                'language' => self::languageSaturday8_9PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::scheduleSaturday9_10PM,
                'language' => self::languageSaturday9_10PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function adorations()
    {
        return array_merge(
            self::sundayAdorations(),
            self::mondayAdorations(),
            self::tuesdayAdorations(),
            self::wednesdayAdorations(),
            self::thursdayAdorations(),
            self::fridayAdorations(),
            self::saturdayAdorations()
        );
    }

    public static function sundayAdorations()
    {
        return [
            [
                'schedule' => self::adorationSunday4_5AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationSunday5_6AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationSunday6_7AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationSunday7_8AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationSunday8_9AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationSunday9_10AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::adorationSunday10_11AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationSunday11_12PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationSunday12_1PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationSunday1_2PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationSunday2_3PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationSunday3_4PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationSunday4_5PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationSunday5_6PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationSunday6_7PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationSunday7_8PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationSunday8_9PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationSunday9_10PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function mondayAdorations()
    {
        return [
            [
                'schedule' => self::adorationMonday4_5AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationMonday5_6AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationMonday6_7AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationMonday7_8AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationMonday8_9AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationMonday9_10AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_9_10
            ],
            [
                'schedule' => self::adorationMonday10_11AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationMonday11_12PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationMonday12_1PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationMonday1_2PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationMonday2_3PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationMonday3_4PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationMonday4_5PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationMonday5_6PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationMonday6_7PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationMonday7_8PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationMonday8_9PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationMonday9_10PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function tuesdayAdorations()
    {
        return [
            [
                'schedule' => self::adorationTuesday4_5AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationTuesday5_6AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationTuesday6_7AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationTuesday7_8AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationTuesday8_9AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationTuesday9_10AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::adorationTuesday10_11AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationTuesday11_12PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationTuesday12_1PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationTuesday1_2PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationTuesday2_3PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationTuesday3_4PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationTuesday4_5PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationTuesday5_6PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationTuesday6_7PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationTuesday7_8PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationTuesday8_9PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationTuesday9_10PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function wednesdayAdorations()
    {
        return [
            [
                'schedule' => self::adorationWednesday4_5AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationWednesday5_6AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationWednesday6_7AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationWednesday7_8AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationWednesday8_9AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationWednesday9_10AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::adorationWednesday10_11AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationWednesday11_12PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationWednesday12_1PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationWednesday1_2PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationWednesday2_3PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationWednesday3_4PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationWednesday4_5PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationWednesday5_6PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationWednesday6_7PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationWednesday7_8PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationWednesday8_9PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationWednesday9_10PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function thursdayAdorations()
    {
        return [
            [
                'schedule' => self::adorationThursday4_5AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationThursday5_6AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationThursday6_7AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationThursday7_8AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationThursday8_9AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationThursday9_10AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::adorationThursday10_11AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationThursday11_12PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationThursday12_1PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationThursday1_2PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationThursday2_3PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationThursday3_4PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationThursday4_5PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationThursday5_6PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationThursday6_7PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationThursday7_8PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationThursday8_9PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationThursday9_10PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function fridayAdorations()
    {
        return [
            [
                'schedule' => self::adorationFriday4_5AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationFriday5_6AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationFriday6_7AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationFriday7_8AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationFriday8_9AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationFriday9_10AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::adorationFriday10_11AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationFriday11_12PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationFriday12_1PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationFriday1_2PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationFriday2_3PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationFriday3_4PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationFriday4_5PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationFriday5_6PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationFriday6_7PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationFriday7_8PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationFriday8_9PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationFriday9_10PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function saturdayAdorations()
    {
        return [
            [
                'schedule' => self::adorationSaturday4_5AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::adorationSaturday5_6AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::adorationSaturday6_7AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::adorationSaturday7_8AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::adorationSaturday8_9AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::adorationSaturday9_10AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::adorationSaturday10_11AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::adorationSaturday11_12PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::adorationSaturday12_1PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::adorationSaturday1_2PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::adorationSaturday2_3PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::adorationSaturday3_4PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::adorationSaturday4_5PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::adorationSaturday5_6PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::adorationSaturday6_7PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::adorationSaturday7_8PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::adorationSaturday8_9PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::adorationSaturday9_10PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_9_10
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
                'schedule' => self::confessionSunday4_5AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionSunday5_6AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionSunday6_7AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionSunday7_8AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionSunday8_9AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionSunday9_10AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionSunday10_11AM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionSunday11_12PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::confessionSunday12_1PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionSunday1_2PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionSunday2_3PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionSunday3_4PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionSunday4_5PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionSunday5_6PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionSunday6_7PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionSunday7_8PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionSunday8_9PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionSunday9_10PM,
                'schedule_id' => Schedule::SUNDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function mondayConfessions()
    {
        return [
            [
                'schedule' => self::confessionMonday4_5AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionMonday5_6AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionMonday6_7AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionMonday7_8AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionMonday8_9AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionMonday9_10AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionMonday10_11AM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionMonday11_12PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::confessionMonday12_1PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionMonday1_2PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionMonday2_3PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionMonday3_4PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionMonday4_5PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionMonday5_6PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionMonday6_7PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionMonday7_8PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionMonday8_9PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionMonday9_10PM,
                'schedule_id' => Schedule::MONDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function tuesdayConfessions()
    {
        return [
            [
                'schedule' => self::confessionTuesday4_5AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionTuesday5_6AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionTuesday6_7AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionTuesday7_8AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionTuesday8_9AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionTuesday9_10AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionTuesday10_11AM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionTuesday11_12PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::confessionTuesday12_1PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionTuesday1_2PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionTuesday2_3PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionTuesday3_4PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionTuesday4_5PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionTuesday5_6PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionTuesday6_7PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionTuesday7_8PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionTuesday8_9PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionTuesday9_10PM,
                'schedule_id' => Schedule::TUESDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function wednesdayConfessions()
    {
        return [
            [
                'schedule' => self::confessionWednesday4_5AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionWednesday5_6AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionWednesday6_7AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionWednesday7_8AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionWednesday8_9AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionWednesday9_10AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionWednesday10_11AM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionWednesday11_12PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::AM_11_12
            ],
            [
                'schedule' => self::confessionWednesday12_1PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionWednesday1_2PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionWednesday2_3PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionWednesday3_4PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionWednesday4_5PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionWednesday5_6PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionWednesday6_7PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionWednesday7_8PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionWednesday8_9PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionWednesday9_10PM,
                'schedule_id' => Schedule::WEDNESDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function thursdayConfessions()
    {
        return [
            [
                'schedule' => self::confessionThursday4_5AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionThursday5_6AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionThursday6_7AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionThursday7_8AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionThursday8_9AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionThursday9_10AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionThursday10_11AM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionThursday11_12PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::confessionThursday12_1PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionThursday1_2PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionThursday2_3PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionThursday3_4PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionThursday4_5PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionThursday5_6PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionThursday6_7PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionThursday7_8PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionThursday8_9PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionThursday9_10PM,
                'schedule_id' => Schedule::THURSDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function fridayConfessions()
    {
        return [
            [
                'schedule' => self::confessionFriday4_5AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionFriday5_6AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionFriday6_7AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionFriday7_8AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionFriday8_9AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionFriday9_10AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionFriday10_11AM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionFriday11_12PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::confessionFriday12_1PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionFriday1_2PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionFriday2_3PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionFriday3_4PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionFriday4_5PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionFriday5_6PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionFriday6_7PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionFriday7_8PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionFriday8_9PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionFriday9_10PM,
                'schedule_id' => Schedule::FRIDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }

    public static function saturdayConfessions()
    {
        return [
            [
                'schedule' => self::confessionSaturday4_5AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_4_5
            ],
            [
                'schedule' => self::confessionSaturday5_6AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_5_6
            ],
            [
                'schedule' => self::confessionSaturday6_7AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_6_7
            ],
            [
                'schedule' => self::confessionSaturday7_8AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_7_8
            ],
            [
                'schedule' => self::confessionSaturday8_9AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_8_9
            ],
            [
                'schedule' => self::confessionSaturday9_10AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_9_10
            ],
            [
                'schedule' => self::confessionSaturday10_11AM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::AM_10_11
            ],
            [
                'schedule' => self::confessionSaturday11_12PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_11_12
            ],
            [
                'schedule' => self::confessionSaturday12_1PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_12_1
            ],
            [
                'schedule' => self::confessionSaturday1_2PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_1_2
            ],
            [
                'schedule' => self::confessionSaturday2_3PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_2_3
            ],
            [
                'schedule' => self::confessionSaturday3_4PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_3_4
            ],
            [
                'schedule' => self::confessionSaturday4_5PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_4_5
            ],
            [
                'schedule' => self::confessionSaturday5_6PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_5_6
            ],
            [
                'schedule' => self::confessionSaturday6_7PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_6_7
            ],
            [
                'schedule' => self::confessionSaturday7_8PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_7_8
            ],
            [
                'schedule' => self::confessionSaturday8_9PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_8_9
            ],
            [
                'schedule' => self::confessionSaturday9_10PM,
                'schedule_id' => Schedule::SATURDAY,
                'time_standard' => TimeStandard::PM_9_10
            ]
        ];
    }
}