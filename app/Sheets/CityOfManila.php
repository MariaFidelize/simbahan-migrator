<?php

namespace App\Sheets;


class CityOfManila
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
    const standaloneColumn = 'V';
    const conventsColumn = 'W';
    const mallsColumn = 'X';
    const schoolsColumn = 'Y';
    const hospitalsColumn = 'Z';
    const othersColumn = 'AA';
    const airConditionedColumn = 'AB';
    const ceilingFanColumn = 'AC';
    const ordinaryFanColumn = 'AD';
    const streetParkingColumn = 'AE';
    const mallParkingColumn = 'AF';
    const privateChurchParkingColumn = 'AG';
    const otherParkingColumn = 'AH';
    const withAdorationColumn = 'AI';
    const AdorationHasAirConditionedColumn = 'AJ';
    const AdorationHasElectricFanColumn = 'AK';

    // Sunday Schedules
    const scheduleSunday5_6AM = 'AL';
    const scheduleSunday6_7AM = 'AM';
    const scheduleSunday7_8AM = 'AN';
    const scheduleSunday8_9AM = 'AO';
    const scheduleSunday9_10AM = 'AP';
    const scheduleSunday10_11AM = 'AQ';
    const scheduleSunday11_12PM = 'AR';
    const scheduleSunday12_1PM = 'AS';
    const scheduleSunday1_2PM = 'AT';
    const scheduleSunday2_3PM = 'AU';
    const scheduleSunday3_4PM = 'AV';
    const scheduleSunday4_5PM = 'AW';
    const scheduleSunday5_6PM = 'AX';
    const scheduleSunday6_7PM = 'AY';
    const scheduleSunday7_8PM = 'AZ';
    const scheduleSunday8_9PM = 'BA';
    const scheduleSunday9_10PM = 'BB';

    // Monday Schedules
    const scheduleMonday5_6AM = 'BC';
    const scheduleMonday6_7AM = 'BD';
    const scheduleMonday7_8AM = 'BE';
    const scheduleMonday8_9AM = 'BF';
    const scheduleMonday9_10AM = 'BG';
    const scheduleMonday10_11AM = 'BH';
    const scheduleMonday11_12PM = 'BI';
    const scheduleMonday12_1PM = 'BJ';
    const scheduleMonday1_2PM = 'BK';
    const scheduleMonday2_3PM = 'BL';
    const scheduleMonday3_4PM = 'BM';
    const scheduleMonday4_5PM = 'BN';
    const scheduleMonday5_6PM = 'BO';
    const scheduleMonday6_7PM = 'BP';
    const scheduleMonday7_8PM = 'BQ';
    const scheduleMonday8_9PM = 'BR';
    const scheduleMonday9_10PM = 'BS';

    // Tuesday Schedules
    const scheduleTuesday5_6AM = 'BT';
    const scheduleTuesday6_7AM = 'BU';
    const scheduleTuesday7_8AM = 'BV';
    const scheduleTuesday8_9AM = 'BW';
    const scheduleTuesday9_10AM = 'BX';
    const scheduleTuesday10_11AM = 'BY';
    const scheduleTuesday11_12PM = 'BZ';
    const scheduleTuesday12_1PM = 'CA';
    const scheduleTuesday1_2PM = 'CB';
    const scheduleTuesday2_3PM = 'CC';
    const scheduleTuesday3_4PM = 'CD';
    const scheduleTuesday4_5PM = 'CE';
    const scheduleTuesday5_6PM = 'CF';
    const scheduleTuesday6_7PM = 'CG';
    const scheduleTuesday7_8PM = 'CH';
    const scheduleTuesday8_9PM = 'CI';
    const scheduleTuesday9_10PM = 'CJ';

    // Wednesday Schedules
    const scheduleWednesday5_6AM = 'CK';
    const scheduleWednesday6_7AM = 'CL';
    const scheduleWednesday7_8AM = 'CM';
    const scheduleWednesday8_9AM = 'CN';
    const scheduleWednesday9_10AM = 'CO';
    const scheduleWednesday10_11AM = 'CP';
    const scheduleWednesday11_12PM = 'CQ';
    const scheduleWednesday12_1PM = 'CR';
    const scheduleWednesday1_2PM = 'CS';
    const scheduleWednesday2_3PM = 'CT';
    const scheduleWednesday3_4PM = 'CU';
    const scheduleWednesday4_5PM = 'CV';
    const scheduleWednesday5_6PM = 'CW';
    const scheduleWednesday6_7PM = 'CX';
    const scheduleWednesday7_8PM = 'CY';
    const scheduleWednesday8_9PM = 'CZ';
    const scheduleWednesday9_10PM = 'DA';

    // Thursday Schedules
    const scheduleThursday5_6AM = 'DB';
    const scheduleThursday6_7AM = 'DC';
    const scheduleThursday7_8AM = 'DD';
    const scheduleThursday8_9AM = 'DE';
    const scheduleThursday9_10AM = 'DF';
    const scheduleThursday10_11AM = 'DG';
    const scheduleThursday11_12PM = 'DH';
    const scheduleThursday12_1PM = 'DI';
    const scheduleThursday1_2PM = 'DJ';
    const scheduleThursday2_3PM = 'DK';
    const scheduleThursday3_4PM = 'DL';
    const scheduleThursday4_5PM = 'DM';
    const scheduleThursday5_6PM = 'DN';
    const scheduleThursday6_7PM = 'DO';
    const scheduleThursday7_8PM = 'DP';
    const scheduleThursday8_9PM = 'DQ';
    const scheduleThursday9_10PM = 'DR';
    const scheduleThursday10_11PM = 'DS';

    // Friday Schedules
//    const friday4_5AM = 'DT';
    const scheduleFriday4_5AM = 'DU';
    const scheduleFriday5_6AM = 'DV';
    const scheduleFriday6_7AM = 'DW';
    const scheduleFriday7_8AM = 'DX';
    const scheduleFriday8_9AM = 'DY';
    const scheduleFriday9_10AM = 'DZ';
    const scheduleFriday10_11AM = 'EA';
    const scheduleFriday11_12PM = 'EB';
    const scheduleFriday12_1PM = 'EC';
    const scheduleFriday1_2PM = 'ED';
    const scheduleFriday2_3PM = 'EE';
    const scheduleFriday3_4PM = 'EF';
    const scheduleFriday4_5PM = 'EG';
    const scheduleFriday5_6PM = 'EH';
    const scheduleFriday6_7PM = 'EI';
    const scheduleFriday7_8PM = 'EJ';
    const scheduleFriday8_9PM = 'EK';
    const scheduleFriday9_10PM = 'EL';

    // Saturday Schedules
    const scheduleSaturday5_6AM = 'EM';
    const scheduleSaturday6_7AM = 'EN';
    const scheduleSaturday7_8AM = 'EO';
    const scheduleSaturday8_9AM = 'EP';
    const scheduleSaturday9_10AM = 'EQ';
    const scheduleSaturday10_11AM = 'ER';
    const scheduleSaturday11_12PM = 'ES';
    const scheduleSaturday12_1PM = 'ET';
    const scheduleSaturday1_2PM = 'EU';
    const scheduleSaturday2_3PM = 'EV';
    const scheduleSaturday3_4PM = 'EW';
    const scheduleSaturday4_5PM = 'EX';
    const scheduleSaturday5_6PM = 'EY';
    const scheduleSaturday6_7PM = 'EZ';
    const scheduleSaturday7_8PM = 'FA';
    const scheduleSaturday8_9PM = 'FB';
    const scheduleSaturday9_10PM = 'FC';

    // Sunday Language
    const languageSunday5_6AM = 'FD';
    const languageSunday6_7AM = 'FE';
    const languageSunday7_8AM = 'FF';
    const languageSunday8_9AM = 'FG';
    const languageSunday9_10AM = 'FH';
    const languageSunday10_11AM = 'FI';
    const languageSunday11_12PM = 'FJ';
    const languageSunday12_1PM = 'FK';
    const languageSunday1_2PM = 'FL';
    const languageSunday2_3PM = 'FM';
    const languageSunday3_4PM = 'FN';
    const languageSunday4_5PM = 'FO';
    const languageSunday5_6PM = 'FP';
    const languageSunday6_7PM = 'FQ';
    const languageSunday7_8PM = 'FR';
    const languageSunday8_9PM = 'FS';
    const languageSunday9_10PM = 'FT';

    // Monday Language
    const languageMonday5_6AM = 'FU';
    const languageMonday6_7AM = 'FV';
    const languageMonday7_8AM = 'FW';
    const languageMonday8_9AM = 'FX';
    const languageMonday9_10AM = 'FY';
    const languageMonday10_11AM = 'FZ';
    const languageMonday11_12PM = 'GA';
    const languageMonday12_1PM = 'GB';
    const languageMonday1_2PM = 'GC';
    const languageMonday2_3PM = 'GD';
    const languageMonday3_4PM = 'GE';
    const languageMonday4_5PM = 'GF';
    const languageMonday5_6PM = 'GG';
    const languageMonday6_7PM = 'GH';
    const languageMonday7_8PM = 'GI';
    const languageMonday8_9PM = 'GJ';
    const languageMonday9_10PM = 'GK';

    // Tuesday Language
    const languageTuesday5_6AM = 'GL';
    const languageTuesday6_7AM = 'GM';
    const languageTuesday7_8AM = 'GN';
    const languageTuesday8_9AM = 'GO';
    const languageTuesday9_10AM = 'GP';
    const languageTuesday10_11AM = 'GQ';
    const languageTuesday11_12PM = 'GR';
    const languageTuesday12_1PM = 'GS';
    const languageTuesday1_2PM = 'GT';
    const languageTuesday2_3PM = 'GU';
    const languageTuesday3_4PM = 'GV';
    const languageTuesday4_5PM = 'GW';
    const languageTuesday5_6PM = 'GX';
    const languageTuesday6_7PM = 'GY';
    const languageTuesday7_8PM = 'GZ';
    const languageTuesday8_9PM = 'HA';
    const languageTuesday9_10PM = 'HB';

    // Wednesday Language
    const languageWednesday5_6AM = 'HC';
    const languageWednesday6_7AM = 'HD';
    const languageWednesday7_8AM = 'HE';
    const languageWednesday8_9AM = 'HF';
    const languageWednesday9_10AM = 'HG';
    const languageWednesday10_11AM = 'HH';
    const languageWednesday11_12PM = 'HI';
    const languageWednesday12_1PM = 'HJ';
    const languageWednesday1_2PM = 'HK';
    const languageWednesday2_3PM = 'HL';
    const languageWednesday3_4PM = 'HM';
    const languageWednesday4_5PM = 'HN';
    const languageWednesday5_6PM = 'HO';
    const languageWednesday6_7PM = 'HP';
    const languageWednesday7_8PM = 'HQ';
    const languageWednesday8_9PM = 'HR';
    const languageWednesday9_10PM = 'HS';

    // Thursday Language
    const languageThursday5_6AM = 'HT';
    const languageThursday6_7AM = 'HU';
    const languageThursday7_8AM = 'HV';
    const languageThursday8_9AM = 'HW';
    const languageThursday9_10AM = 'HX';
    const languageThursday10_11AM = 'HY';
    const languageThursday11_12PM = 'HZ';
    const languageThursday12_1PM = 'IA';
    const languageThursday1_2PM = 'IB';
    const languageThursday2_3PM = 'IC';
    const languageThursday3_4PM = 'ID';
    const languageThursday4_5PM = 'IE';
    const languageThursday5_6PM = 'IF';
    const languageThursday6_7PM = 'IG';
    const languageThursday7_8PM = 'IH';
    const languageThursday8_9PM = 'II';
    const languageThursday9_10PM = 'IJ';

    // Friday Language
    const languageFriday5_6AM = 'IK';
    const languageFriday6_7AM = 'IL';
    const languageFriday7_8AM = 'IM';
    const languageFriday8_9AM = 'IN';
    const languageFriday9_10AM = 'IO';
    const languageFriday10_11AM = 'IP';
    const languageFriday11_12PM = 'IQ';
    const languageFriday12_1PM = 'IR';
    const languageFriday1_2PM = 'IS';
    const languageFriday2_3PM = 'IT';
    const languageFriday3_4PM = 'IU';
    const languageFriday4_5PM = 'IV';
    const languageFriday5_6PM = 'IW';
    const languageFriday6_7PM = 'IX';
    const languageFriday7_8PM = 'IY';
    const languageFriday8_9PM = 'IZ';
    const languageFriday9_10PM = 'JA';

    // Saturday Language
    const languageSaturday5_6AM = 'JB';
    const languageSaturday6_7AM = 'JC';
    const languageSaturday7_8AM = 'JD';
    const languageSaturday8_9AM = 'JE';
    const languageSaturday9_10AM = 'JF';
    const languageSaturday10_11AM = 'JG';
    const languageSaturday11_12PM = 'JH';
    const languageSaturday12_1PM = 'JI';
    const languageSaturday1_2PM = 'JJ';
    const languageSaturday2_3PM = 'JK';
    const languageSaturday3_4PM = 'JL';
    const languageSaturday4_5PM = 'JM';
    const languageSaturday5_6PM = 'JN';
    const languageSaturday6_7PM = 'JO';
    const languageSaturday7_8PM = 'JP';
    const languageSaturday8_9PM = 'JQ';
    const languageSaturday9_10PM = 'JR';

    // Sunday Confession
    const confessionSunday5_6AM = 'JS';
    const confessionSunday6_7AM = 'JT';
    const confessionSunday7_8AM = 'JU';
    const confessionSunday8_9AM = 'JV';
    const confessionSunday9_10AM = 'JW';
    const confessionSunday10_11AM = 'JX';
    const confessionSunday11_12PM = 'JY';
    const confessionSunday12_1PM = 'JZ';
    const confessionSunday1_2PM = 'KA';
    const confessionSunday2_3PM = 'KB';
    const confessionSunday3_4PM = 'KC';
    const confessionSunday4_5PM = 'KD';
    const confessionSunday5_6PM = 'KE';
    const confessionSunday6_7PM = 'KF';
    const confessionSunday7_8PM = 'KG';
    const confessionSunday8_9PM = 'KH';
    const confessionSunday9_10PM = 'KI';

    // Monday Confession
    const confessionMonday5_6AM = 'KJ';
    const confessionMonday6_7AM = 'KK';
    const confessionMonday7_8AM = 'KL';
    const confessionMonday8_9AM = 'KM';
    const confessionMonday9_10AM = 'KN';
    const confessionMonday10_11AM = 'KO';
    const confessionMonday11_12PM = 'KP';
    const confessionMonday12_1PM = 'KQ';
    const confessionMonday1_2PM = 'KR';
    const confessionMonday2_3PM = 'KS';
    const confessionMonday3_4PM = 'KT';
    const confessionMonday4_5PM = 'KU';
    const confessionMonday5_6PM = 'KV';
    const confessionMonday6_7PM = 'KW';
    const confessionMonday7_8PM = 'KX';
    const confessionMonday8_9PM = 'KY';
    const confessionMonday9_10PM = 'KZ';

    // Tuesday Confession
    const confessionTuesday5_6AM = 'LA';
    const confessionTuesday6_7AM = 'LB';
    const confessionTuesday7_8AM = 'LC';
    const confessionTuesday8_9AM = 'LD';
    const confessionTuesday9_10AM = 'LE';
    const confessionTuesday10_11AM = 'LF';
    const confessionTuesday11_12PM = 'LG';
    const confessionTuesday12_1PM = 'LH';
    const confessionTuesday1_2PM = 'LI';
    const confessionTuesday2_3PM = 'LJ';
    const confessionTuesday3_4PM = 'LK';
    const confessionTuesday4_5PM = 'LL';
    const confessionTuesday5_6PM = 'LM';
    const confessionTuesday6_7PM = 'LN';
    const confessionTuesday7_8PM = 'LO';
    const confessionTuesday8_9PM = 'LP';
    const confessionTuesday9_10PM = 'LQ';

    // Wednesday Confession
    const confessionWednesday5_6AM = 'LR';
    const confessionWednesday6_7AM = 'LS';
    const confessionWednesday7_8AM = 'LT';
    const confessionWednesday8_9AM = 'LU';
    const confessionWednesday9_10AM = 'LV';
    const confessionWednesday10_11AM = 'LW';
    const confessionWednesday11_12PM = 'LX';
    const confessionWednesday12_1PM = 'LY';
    const confessionWednesday1_2PM = 'LZ';
    const confessionWednesday2_3PM = 'MA';
    const confessionWednesday3_4PM = 'MB';
    const confessionWednesday4_5PM = 'MC';
    const confessionWednesday5_6PM = 'MD';
    const confessionWednesday6_7PM = 'ME';
    const confessionWednesday7_8PM = 'MF';
    const confessionWednesday8_9PM = 'MG';
    const confessionWednesday9_10PM = 'MH';

    // Thursday Confession
    const confessionThursday5_6AM = 'MI';
    const confessionThursday6_7AM = 'MJ';
    const confessionThursday7_8AM = 'MK';
    const confessionThursday8_9AM = 'ML';
    const confessionThursday9_10AM = 'MM';
    const confessionThursday10_11AM = 'MN';
    const confessionThursday11_12PM = 'MO';
    const confessionThursday12_1PM = 'MP';
    const confessionThursday1_2PM = 'MQ';
    const confessionThursday2_3PM = 'MR';
    const confessionThursday3_4PM = 'MS';
    const confessionThursday4_5PM = 'MT';
    const confessionThursday5_6PM = 'MU';
    const confessionThursday6_7PM = 'MV';
    const confessionThursday7_8PM = 'MW';
    const confessionThursday8_9PM = 'MX';
    const confessionThursday9_10PM = 'MY';

    // Friday Confession
    const confessionFriday5_6AM = 'MZ';
    const confessionFriday6_7AM = 'NA';
    const confessionFriday7_8AM = 'NB';
    const confessionFriday8_9AM = 'NC';
    const confessionFriday9_10AM = 'ND';
    const confessionFriday10_11AM = 'NE';
    const confessionFriday11_12PM = 'NF';
    const confessionFriday12_1PM = 'NG';
    const confessionFriday1_2PM = 'NH';
    const confessionFriday2_3PM = 'NI';
    const confessionFriday3_4PM = 'NJ';
    const confessionFriday4_5PM = 'NK';
    const confessionFriday5_6PM = 'NL';
    const confessionFriday6_7PM = 'NM';
    const confessionFriday7_8PM = 'NN';
    const confessionFriday8_9PM = 'NO';
    const confessionFriday9_10PM = 'NP';

    // Saturday Confession
    const confessionSaturday5_6AM = 'NQ';
    const confessionSaturday6_7AM = 'NR';
    const confessionSaturday7_8AM = 'NS';
    const confessionSaturday8_9AM = 'NT';
    const confessionSaturday9_10AM = 'NU';
    const confessionSaturday10_11AM = 'NV';
    const confessionSaturday11_12PM = 'NW';
    const confessionSaturday12_1PM = 'NX';
    const confessionSaturday1_2PM = 'NY';
    const confessionSaturday2_3PM = 'NZ';
    const confessionSaturday3_4PM = 'OA';
    const confessionSaturday4_5PM = 'OB';
    const confessionSaturday5_6PM = 'OC';
    const confessionSaturday6_7PM = 'OD';
    const confessionSaturday7_8PM = 'OE';
    const confessionSaturday8_9PM = 'OF';
    const confessionSaturday9_10PM = 'OG';

    const adorationChapelScheduleColumn = 'OH';
    const isAdoration24HoursColumn = 'OI';
    // OJ - OP
    const baptismScheduleColumn = 'OQ';
    const weddingScheduleColumn = 'OR';
    const devotionColumn = 'OS';
    const officeHoursColumn = 'OT';
    const churchHistoryColumn = 'OU';
    const churchPhotosColumn = 'OV';
    const metaDescriptionColumn = 'OW';
    const metaKeywordsColumn = 'OX';
    const remarksColumn = 'OY';
    const tierColumn = 'OZ';
    const lastMassScheduleUpdateColumn = 'PA';
}