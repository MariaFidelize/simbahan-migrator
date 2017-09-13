<?php


namespace App\Sheets;


use App\Models\Schedule;
use App\Models\TimeStandard;

class Organization
{
    const Number = 'B';
    const Name = 'C';
    const LastUpdate = 'D';
    const FullAddress = 'E';
    const Street = 'F';
    const Barangay = 'G';
    const City = 'H';
    const State = 'I';
    const Country = 'J';
    const DateEstablished = 'K';
    const ParentOrganization = 'L';
    const Preacher = 'M';
    const Location = 'N';
    const ContactNumber = 'O';
    const ContactPerson = 'P';
    const Email = 'Q';
    const Website = 'R';
    const InChurch = 'S';
    const InSchool = 'T';
    const InPublic = 'U';
    const InMall = 'V';
    const InPrivate = 'W';
    const HasAircon = 'Y';
    const HasCeilingfan = 'Z';
    const HasWallfan = 'AA';
    const HasStandFan = 'AB';
    const HasStreetParking = 'AC';
    const HasMallParking = 'AD';
    const HasPrivateParking = 'AE';
    const HasMaleAttendees = 'AG';
    const HasSingleAttendees = 'AH';
    const HasProfessionalAttendees = 'AI';
    const HasStudentAttendees = 'AJ';
    const HasCoupleAttendees = 'AK';
    const HasWomenAttendees = 'AL';
    const HasMissionaryAttendees = 'AM';
    const HasNonCatholicAttendees = 'AN';


    const worshipSunday5_6AM = 'AO';
    const worshipSunday6_7AM = 'AP';
    const worshipSunday7_8AM = 'AQ';
    const worshipSunday8_9AM = 'AR';
    const worshipSunday9_10AM = 'AS';
    const worshipSunday10_11AM = 'AT';
    const worshipSunday11_12PM = 'AU';
    const worshipSunday12_1PM = 'AV';
    const worshipSunday1_2PM = 'AW';
    const worshipSunday2_3PM = 'AX';
    const worshipSunday3_4PM = 'AY';
    const worshipSunday4_5PM = 'AZ';
    const worshipSunday5_6PM = 'BA';
    const worshipSunday6_7PM = 'BB';
    const worshipSunday7_8PM = 'BC';
    const worshipSunday8_9PM = 'BD';
    const worshipSunday9_10PM = 'BE';

    const worshipMonday5_6AM = 'BF';
    const worshipMonday6_7AM = 'BG';
    const worshipMonday7_8AM = 'BH';
    const worshipMonday8_9AM = 'BI';
    const worshipMonday9_10AM = 'BJ';
    const worshipMonday10_11AM = 'BK';
    const worshipMonday11_12PM = 'BL';
    const worshipMonday12_1PM = 'BM';
    const worshipMonday1_2PM = 'BN';
    const worshipMonday2_3PM = 'BO';
    const worshipMonday3_4PM = 'BP';
    const worshipMonday4_5PM = 'BQ';
    const worshipMonday5_6PM = 'BR';
    const worshipMonday6_7PM = 'BS';
    const worshipMonday7_8PM = 'BT';
    const worshipMonday8_9PM = 'BU';
    const worshipMonday9_10PM = 'BV';


    const worshipTuesday5_6AM = 'BW';
    const worshipTuesday6_7AM = 'BX';
    const worshipTuesday7_8AM = 'BY';
    const worshipTuesday8_9AM = 'BZ';
    const worshipTuesday9_10AM = 'CA';
    const worshipTuesday10_11AM = 'CB';
    const worshipTuesday11_12PM = 'CC';
    const worshipTuesday12_1PM = 'CD';
    const worshipTuesday1_2PM = 'CE';
    const worshipTuesday2_3PM = 'CF';
    const worshipTuesday3_4PM = 'CG';
    const worshipTuesday4_5PM = 'CH';
    const worshipTuesday5_6PM = 'CI';
    const worshipTuesday6_7PM = 'CJ';
    const worshipTuesday7_8PM = 'CK';
    const worshipTuesday8_9PM = 'CL';
    const worshipTuesday9_10PM = 'CM';


    const worshipWednesday5_6AM = 'CN';
    const worshipWednesday6_7AM = 'CO';
    const worshipWednesday7_8AM = 'CP';
    const worshipWednesday8_9AM = 'CQ';
    const worshipWednesday9_10AM = 'CR';
    const worshipWednesday10_11AM = 'CS';
    const worshipWednesday11_12PM = 'CT';
    const worshipWednesday12_1PM = 'CU';
    const worshipWednesday1_2PM = 'CV';
    const worshipWednesday2_3PM = 'CW';
    const worshipWednesday3_4PM = 'CX';
    const worshipWednesday4_5PM = 'CY';
    const worshipWednesday5_6PM = 'CZ';
    const worshipWednesday6_7PM = 'DA';
    const worshipWednesday7_8PM = 'DB';
    const worshipWednesday8_9PM = 'DC';
    const worshipWednesday9_10PM = 'DD';


    const worshipThursday5_6AM = 'DE';
    const worshipThursday6_7AM = 'DF';
    const worshipThursday7_8AM = 'DG';
    const worshipThursday8_9AM = 'DH';
    const worshipThursday9_10AM = 'DI';
    const worshipThursday10_11AM = 'DJ';
    const worshipThursday11_12PM = 'DK';
    const worshipThursday12_1PM = 'DL';
    const worshipThursday1_2PM = 'DM';
    const worshipThursday2_3PM = 'DN';
    const worshipThursday3_4PM = 'DO';
    const worshipThursday4_5PM = 'DP';
    const worshipThursday5_6PM = 'DQ';
    const worshipThursday6_7PM = 'DR';
    const worshipThursday7_8PM = 'DS';
    const worshipThursday8_9PM = 'DT';
    const worshipThursday9_10PM = 'DU';


    const worshipFriday5_6AM = 'DV';
    const worshipFriday6_7AM = 'DW';
    const worshipFriday7_8AM = 'DX';
    const worshipFriday8_9AM = 'DY';
    const worshipFriday9_10AM = 'DZ';
    const worshipFriday10_11AM = 'EA';
    const worshipFriday11_12PM = 'EB';
    const worshipFriday12_1PM = 'EC';
    const worshipFriday1_2PM = 'ED';
    const worshipFriday2_3PM = 'EE';
    const worshipFriday3_4PM = 'EF';
    const worshipFriday4_5PM = 'EG';
    const worshipFriday5_6PM = 'EH';
    const worshipFriday6_7PM = 'EI';
    const worshipFriday7_8PM = 'EJ';
    const worshipFriday8_9PM = 'EK';
    const worshipFriday9_10PM = 'EL';


    const worshipSaturday5_6AM = 'EM';
    const worshipSaturday6_7AM = 'EN';
    const worshipSaturday7_8AM = 'EO';
    const worshipSaturday8_9AM = 'EP';
    const worshipSaturday9_10AM = 'EQ';
    const worshipSaturday10_11AM = 'ER';
    const worshipSaturday11_12PM = 'ES';
    const worshipSaturday12_1PM = 'ET';
    const worshipSaturday1_2PM = 'EU';
    const worshipSaturday2_3PM = 'EV';
    const worshipSaturday3_4PM = 'EW';
    const worshipSaturday4_5PM = 'EX';
    const worshipSaturday5_6PM = 'EY';
    const worshipSaturday6_7PM = 'EZ';
    const worshipSaturday7_8PM = 'FA';
    const worshipSaturday8_9PM = 'FB';
    const worshipSaturday9_10PM = 'FC';


    const massSunday5_6AM = 'FD';
    const massSunday6_7AM = 'FE';
    const massSunday7_8AM = 'FF';
    const massSunday8_9AM = 'FG';
    const massSunday9_10AM = 'FH';
    const massSunday10_11AM = 'FI';
    const massSunday11_12PM = 'FJ';
    const massSunday12_1PM = 'FK';
    const massSunday1_2PM = 'FL';
    const massSunday2_3PM = 'FM';
    const massSunday3_4PM = 'FN';
    const massSunday4_5PM = 'FO';
    const massSunday5_6PM = 'FP';
    const massSunday6_7PM = 'FQ';
    const massSunday7_8PM = 'FR';
    const massSunday8_9PM = 'FS';
    const massSunday9_10PM = 'FT';


    const massMonday5_6AM = 'FU';
    const massMonday6_7AM = 'FV';
    const massMonday7_8AM = 'FW';
    const massMonday8_9AM = 'FX';
    const massMonday9_10AM = 'FY';
    const massMonday10_11AM = 'FZ';
    const massMonday11_12PM = 'GA';
    const massMonday12_1PM = 'GB';
    const massMonday1_2PM = 'GC';
    const massMonday2_3PM = 'GD';
    const massMonday3_4PM = 'GE';
    const massMonday4_5PM = 'GF';
    const massMonday5_6PM = 'GG';
    const massMonday6_7PM = 'GH';
    const massMonday7_8PM = 'GI';
    const massMonday8_9PM = 'GJ';
    const massMonday9_10PM = 'GK';


    const massTuesday5_6AM = 'GL';
    const massTuesday6_7AM = 'GM';
    const massTuesday7_8AM = 'GN';
    const massTuesday8_9AM = 'GO';
    const massTuesday9_10AM = 'GP';
    const massTuesday10_11AM = 'GQ';
    const massTuesday11_12PM = 'GR';
    const massTuesday12_1PM = 'GS';
    const massTuesday1_2PM = 'GT';
    const massTuesday2_3PM = 'GU';
    const massTuesday3_4PM = 'GV';
    const massTuesday4_5PM = 'GW';
    const massTuesday5_6PM = 'GX';
    const massTuesday6_7PM = 'GY';
    const massTuesday7_8PM = 'GZ';
    const massTuesday8_9PM = 'HA';
    const massTuesday9_10PM = 'HB';


    const massWednesday5_6AM = 'HC';
    const massWednesday6_7AM = 'HD';
    const massWednesday7_8AM = 'HE';
    const massWednesday8_9AM = 'HF';
    const massWednesday9_10AM = 'HG';
    const massWednesday10_11AM = 'HH';
    const massWednesday11_12PM = 'HI';
    const massWednesday12_1PM = 'HJ';
    const massWednesday1_2PM = 'HK';
    const massWednesday2_3PM = 'HL';
    const massWednesday3_4PM = 'HM';
    const massWednesday4_5PM = 'HN';
    const massWednesday5_6PM = 'HO';
    const massWednesday6_7PM = 'HP';
    const massWednesday7_8PM = 'HQ';
    const massWednesday8_9PM = 'HR';
    const massWednesday9_10PM = 'HS';


    const massThursday5_6AM = 'HT';
    const massThursday6_7AM = 'HU';
    const massThursday7_8AM = 'HV';
    const massThursday8_9AM = 'HW';
    const massThursday9_10AM = 'HX';
    const massThursday10_11AM = 'HY';
    const massThursday11_12PM = 'HZ';
    const massThursday12_1PM = 'IA';
    const massThursday1_2PM = 'IB';
    const massThursday2_3PM = 'IC';
    const massThursday3_4PM = 'ID';
    const massThursday4_5PM = 'IE';
    const massThursday5_6PM = 'IF';
    const massThursday6_7PM = 'IG';
    const massThursday7_8PM = 'IH';
    const massThursday8_9PM = 'II';
    const massThursday9_10PM = 'IJ';


    const massFriday5_6AM = 'IK';
    const massFriday6_7AM = 'IL';
    const massFriday7_8AM = 'IM';
    const massFriday8_9AM = 'IN';
    const massFriday9_10AM = 'IO';
    const massFriday10_11AM = 'IP';
    const massFriday11_12PM = 'IQ';
    const massFriday12_1PM = 'IR';
    const massFriday1_2PM = 'IS';
    const massFriday2_3PM = 'IT';
    const massFriday3_4PM = 'IU';
    const massFriday4_5PM = 'IV';
    const massFriday5_6PM = 'IW';
    const massFriday6_7PM = 'IX';
    const massFriday7_8PM = 'IY';
    const massFriday8_9PM = 'IZ';
    const massFriday9_10PM = 'JA';

    const massSaturday5_6AM = 'JB';
    const massSaturday6_7AM = 'JC';
    const massSaturday7_8AM = 'JD';
    const massSaturday8_9AM = 'JE';
    const massSaturday9_10AM = 'JF';
    const massSaturday10_11AM = 'JG';
    const massSaturday11_12PM = 'JH';
    const massSaturday12_1PM = 'JI';
    const massSaturday1_2PM = 'JJ';
    const massSaturday2_3PM = 'JK';
    const massSaturday3_4PM = 'JL';
    const massSaturday4_5PM = 'JM';
    const massSaturday5_6PM = 'JN';
    const massSaturday6_7PM = 'JO';
    const massSaturday7_8PM = 'JP';
    const massSaturday8_9PM = 'JQ';
    const massSaturday9_10PM = 'JR';



    const bibleSunday5_6AM = 'JS';
    const bibleSunday6_7AM = 'JT';
    const bibleSunday7_8AM = 'JU';
    const bibleSunday8_9AM = 'JV';
    const bibleSunday9_10AM = 'JW';
    const bibleSunday10_11AM = 'JX';
    const bibleSunday11_12PM = 'JY';
    const bibleSunday12_1PM = 'JZ';
    const bibleSunday1_2PM = 'KA';
    const bibleSunday2_3PM = 'KB';
    const bibleSunday3_4PM = 'KC';
    const bibleSunday4_5PM = 'KD';
    const bibleSunday5_6PM = 'KE';
    const bibleSunday6_7PM = 'KF';
    const bibleSunday7_8PM = 'KG';
    const bibleSunday8_9PM = 'KH';
    const bibleSunday9_10PM = 'KI';


    const bibleMonday5_6AM = 'KJ';
    const bibleMonday6_7AM = 'KK';
    const bibleMonday7_8AM = 'KL';
    const bibleMonday8_9AM = 'KM';
    const bibleMonday9_10AM = 'KN';
    const bibleMonday10_11AM = 'KO';
    const bibleMonday11_12PM = 'KP';
    const bibleMonday12_1PM = 'KQ';
    const bibleMonday1_2PM = 'KR';
    const bibleMonday2_3PM = 'KS';
    const bibleMonday3_4PM = 'KT';
    const bibleMonday4_5PM = 'KU';
    const bibleMonday5_6PM = 'KV';
    const bibleMonday6_7PM = 'KW';
    const bibleMonday7_8PM = 'KX';
    const bibleMonday8_9PM = 'KY';
    const bibleMonday9_10PM = 'KZ';


    const bibleTuesday5_6AM = 'LA';
    const bibleTuesday6_7AM = 'LB';
    const bibleTuesday7_8AM = 'LC';
    const bibleTuesday8_9AM = 'LD';
    const bibleTuesday9_10AM = 'LE';
    const bibleTuesday10_11AM = 'LF';
    const bibleTuesday11_12PM = 'LG';
    const bibleTuesday12_1PM = 'LH';
    const bibleTuesday1_2PM = 'LI';
    const bibleTuesday2_3PM = 'LJ';
    const bibleTuesday3_4PM = 'LK';
    const bibleTuesday4_5PM = 'LL';
    const bibleTuesday5_6PM = 'LM';
    const bibleTuesday6_7PM = 'LN';
    const bibleTuesday7_8PM = 'LO';
    const bibleTuesday8_9PM = 'LP';
    const bibleTuesday9_10PM = 'LQ';


    const bibleWednesday5_6AM = 'LR';
    const bibleWednesday6_7AM = 'LS';
    const bibleWednesday7_8AM = 'LT';
    const bibleWednesday8_9AM = 'LU';
    const bibleWednesday9_10AM = 'LV';
    const bibleWednesday10_11AM = 'LW';
    const bibleWednesday11_12PM = 'LX';
    const bibleWednesday12_1PM = 'LY';
    const bibleWednesday1_2PM = 'LZ';
    const bibleWednesday2_3PM = 'MA';
    const bibleWednesday3_4PM = 'MB';
    const bibleWednesday4_5PM = 'MC';
    const bibleWednesday5_6PM = 'MD';
    const bibleWednesday6_7PM = 'ME';
    const bibleWednesday7_8PM = 'MF';
    const bibleWednesday8_9PM = 'MG';
    const bibleWednesday9_10PM = 'MH';


    const bibleThursday5_6AM = 'MI';
    const bibleThursday6_7AM = 'MJ';
    const bibleThursday7_8AM = 'MK';
    const bibleThursday8_9AM = 'ML';
    const bibleThursday9_10AM = 'MM';
    const bibleThursday10_11AM = 'MN';
    const bibleThursday11_12PM = 'MO';
    const bibleThursday12_1PM = 'MP';
    const bibleThursday1_2PM = 'MQ';
    const bibleThursday2_3PM = 'MR';
    const bibleThursday3_4PM = 'MS';
    const bibleThursday4_5PM = 'MT';
    const bibleThursday5_6PM = 'MU';
    const bibleThursday6_7PM = 'MV';
    const bibleThursday7_8PM = 'MW';
    const bibleThursday8_9PM = 'MX';
    const bibleThursday9_10PM = 'MY';


    const bibleFriday5_6AM = 'MZ';
    const bibleFriday6_7AM = 'NA';
    const bibleFriday7_8AM = 'NB';
    const bibleFriday8_9AM = 'NC';
    const bibleFriday9_10AM = 'ND';
    const bibleFriday10_11AM = 'NE';
    const bibleFriday11_12PM = 'NF';
    const bibleFriday12_1PM = 'NG';
    const bibleFriday1_2PM = 'NH';
    const bibleFriday2_3PM = 'NI';
    const bibleFriday3_4PM = 'NJ';
    const bibleFriday4_5PM = 'NK';
    const bibleFriday5_6PM = 'NL';
    const bibleFriday6_7PM = 'NM';
    const bibleFriday7_8PM = 'NN';
    const bibleFriday8_9PM = 'NO';
    const bibleFriday9_10PM = 'NP';


    const bibleSaturday5_6AM = 'NQ';
    const bibleSaturday6_7AM = 'NR';
    const bibleSaturday7_8AM = 'NS';
    const bibleSaturday8_9AM = 'NT';
    const bibleSaturday9_10AM = 'NU';
    const bibleSaturday10_11AM = 'NV';
    const bibleSaturday11_12PM = 'NW';
    const bibleSaturday12_1PM = 'NX';
    const bibleSaturday1_2PM = 'NY';
    const bibleSaturday2_3PM = 'NZ';
    const bibleSaturday3_4PM = 'OA';
    const bibleSaturday4_5PM = 'OB';
    const bibleSaturday5_6PM = 'OC';
    const bibleSaturday6_7PM = 'OD';
    const bibleSaturday7_8PM = 'OE';
    const bibleSaturday8_9PM = 'OF';
    const bibleSaturday9_10PM = 'OG';

    const hasWorship = 'OH';
    const hasMass = 'OI';
    const hasRecollection = 'OJ';
    const hasTalks = 'OK';
    const hasBibleStudy = 'OL';
    const hasRetreat = 'OM';
    const hasVolunteerWork = 'ON';
    const hasCamps = 'OO';
    const retreatSchedule = 'OP';
    const recollectionSchedule = 'OQ';
    const talkSchedule = 'OR';
    const campSchedule = 'OS';
    const volunteerWorkSchedule = 'OT';
    const photos = 'OU';
    const metaDescription = 'OV ';
    const metaKeywords = 'OW ';
    const latitude = 'OX';
    const longitude = 'OY';
    const description = 'OZ';

    public static function sundayWorships()
    {
        return [
            [
                'schedule' => self::worshipSunday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::worshipSunday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::SUNDAY
            ]
        ];
    }

    public static function mondayWorships()
    {
        return [
            [
                'schedule' => self::worshipMonday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::worshipMonday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::MONDAY
            ]
        ];
    }

    public static function tuesdayWorships()
    {
        return [
            [
                'schedule' => self::worshipTuesday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::worshipTuesday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::TUESDAY
            ]
        ];
    }

    public static function wednesdayWorships()
    {
        return [
            [
                'schedule' => self::worshipWednesday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::worshipWednesday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::WEDNESDAY
            ]
        ];
    }

    public static function thursdayWorships()
    {
        return [
            [
                'schedule' => self::worshipThursday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::worshipThursday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::THURSDAY
            ]
        ];
    }

    public static function fridayWorships()
    {
        return [
            [
                'schedule' => self::worshipFriday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::worshipFriday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::FRIDAY
            ]
        ];
    }

    public static function saturdayWorships()
    {
        return [
            [
                'schedule' => self::worshipSaturday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::worshipSaturday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::SATURDAY
            ]
        ];
    }

    public static function worship()
    {
        return array_merge(
            self::sundayWorships(),
            self::mondayWorships(),
            self::tuesdayWorships(),
            self::wednesdayWorships(),
            self::thursdayWorships(),
            self::fridayWorships(),
            self::saturdayWorships()
        );
    }

    public static function sundayMass()
    {
        return [
            [
                'schedule' => self::massSunday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::massSunday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::SUNDAY
            ]
        ];
    }

    public static function mondayMass()
    {
        return [
            [
                'schedule' => self::massMonday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::massMonday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::MONDAY
            ]
        ];
    }

    public static function tuesdayMass()
    {
        return [
            [
                'schedule' => self::massTuesday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::massTuesday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::TUESDAY
            ]
        ];
    }

    public static function wednesdayMass()
    {
        return [
            [
                'schedule' => self::massWednesday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::massWednesday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::WEDNESDAY
            ]
        ];
    }

    public static function thursdayMass()
    {
        return [
            [
                'schedule' => self::massThursday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::massThursday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::THURSDAY
            ]
        ];
    }

    public static function fridayMass()
    {
        return [
            [
                'schedule' => self::massFriday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::massFriday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::FRIDAY
            ]
        ];
    }

    public static function saturdayMass()
    {
        return [
            [
                'schedule' => self::massSaturday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::massSaturday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::SATURDAY
            ]
        ];
    }

    public static function masses()
    {
        return array_merge(
            self::sundayMass(),
            self::mondayMass(),
            self::tuesdayMass(),
            self::wednesdayMass(),
            self::thursdayMass(),
            self::fridayMass(),
            self::saturdayMass()
        );
    }

    public static function sundayBible()
    {
        return [
            [
                'schedule' => self::bibleSunday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::SUNDAY
            ],
            [
                'schedule' => self::bibleSunday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::SUNDAY
            ]
        ];
    }

    public static function mondayBible()
    {
        return [
            [
                'schedule' => self::bibleMonday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::MONDAY
            ],
            [
                'schedule' => self::bibleMonday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::MONDAY
            ]
        ];
    }

    public static function tuesdayBible()
    {
        return [
            [
                'schedule' => self::bibleTuesday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::TUESDAY
            ],
            [
                'schedule' => self::bibleTuesday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::TUESDAY
            ]
        ];
    }

    public static function wednesdayBible()
    {
        return [
            [
                'schedule' => self::bibleWednesday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::WEDNESDAY
            ],
            [
                'schedule' => self::bibleWednesday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::WEDNESDAY
            ]
        ];
    }

    public static function thursdayBible()
    {
        return [
            [
                'schedule' => self::bibleThursday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::THURSDAY
            ],
            [
                'schedule' => self::bibleThursday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::THURSDAY
            ]
        ];
    }

    public static function fridayBible()
    {
        return [
            [
                'schedule' => self::bibleFriday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::FRIDAY
            ],
            [
                'schedule' => self::bibleFriday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::FRIDAY
            ]
        ];
    }

    public static function saturdayBible()
    {
        return [
            [
                'schedule' => self::bibleSaturday5_6AM,
                'time_standard' => TimeStandard::AM_5_6,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday6_7AM,
                'time_standard' => TimeStandard::AM_6_7,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday7_8AM,
                'time_standard' => TimeStandard::AM_7_8,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday8_9AM,
                'time_standard' => TimeStandard::AM_8_9,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday9_10AM,
                'time_standard' => TimeStandard::AM_9_10,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday10_11AM,
                'time_standard' => TimeStandard::AM_10_11,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday11_12PM,
                'time_standard' => TimeStandard::PM_11_12,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday12_1PM,
                'time_standard' => TimeStandard::PM_12_1,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday1_2PM,
                'time_standard' => TimeStandard::PM_1_2,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday2_3PM,
                'time_standard' => TimeStandard::PM_2_3,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday3_4PM,
                'time_standard' => TimeStandard::PM_3_4,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday4_5PM,
                'time_standard' => TimeStandard::PM_4_5,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday5_6PM,
                'time_standard' => TimeStandard::PM_5_6,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday6_7PM,
                'time_standard' => TimeStandard::PM_6_7,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday7_8PM,
                'time_standard' => TimeStandard::PM_7_8,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday8_9PM,
                'time_standard' => TimeStandard::PM_8_9,
                'schedule_id' => Schedule::SATURDAY
            ],
            [
                'schedule' => self::bibleSaturday9_10PM,
                'time_standard' => TimeStandard::PM_9_10,
                'schedule_id' => Schedule::SATURDAY
            ]
        ];
    }

    public static function bibleStudies()
    {
        return array_merge(
            self::sundayBible(),
            self::mondayBible(),
            self::tuesdayBible(),
            self::wednesdayBible(),
            self::thursdayBible(),
            self::fridayBible(),
            self::saturdayBible()
        );
    }
}