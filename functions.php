<?php
/**
 * @author Tareq Hasan
 * @copyright 2009
 * @url http://tareq.weDevs.com
 */

/**
 * starts the converting process
 * when English month is January
 */
function banglaCalender( $engHour, $engDate, $engMonth, $engYear ) {

    /**
     * when English month is January
     */
    if ( $engMonth == 1 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "পৌষ";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "পৌষ";
            }
        } else if ( $engDate < 14 && $engDate > 1 ) { // Date 2-13
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "পৌষ";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "পৌষ";
            }
        } else if ( $engDate == 14 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 13;
                $bangMonth = "মাঘ";
            } else {
                $bangDate = 30;
                $bangMonth = "পৌষ";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 13;
                $bangMonth = "মাঘ";
            } else {
                $bangDate = $engDate - 14;
                $bangMonth = "মাঘ";
            }
        }
    }

    /**
     * when English month is February
     */ else if ( $engMonth == 2 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 18;
                $bangMonth = "মাঘ";
            } else {
                $bangDate = $engDate + 17;
                $bangMonth = "মাঘ";
            }
        } else if ( $engDate < 13 && $engDate > 1 ) { // Date 2-12
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 18;
                $bangMonth = "মাঘ";
            } else {
                $bangDate = $engDate + 17;
                $bangMonth = "মাঘ";
            }
        } else if ( $engDate == 13 ) { //Date 13
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 12;
                $bangMonth = "ফাল্গুন";
            } else {
                $bangDate = 30;
                $bangMonth = "মাঘ";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 12;
                $bangMonth = "ফাল্গুন";
            } else {
                $bangDate = $engDate - 13;
                $bangMonth = "ফাল্গুন";
            }
        }
    }
    /**
     * when English month is March
     */ else if ( $engMonth == 3 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "ফাল্গুন";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "ফাল্গুন";
            }
        } else if ( $engDate < 15 && $engDate > 1 ) { // Date 2-13
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "ফাল্গুন";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "ফাল্গুন";
            }
        } else if ( $engDate == 15 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "চৈত্র";
            } else {
                $bangDate = 30;
                $bangMonth = "ফাল্গুন";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "চৈত্র";
            } else {
                $bangDate = $engDate - 15;
                $bangMonth = "চৈত্র";
            }
        }
    }
    /**
     * when English month is April
     */ else if ( $engMonth == 4 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "চৈত্র";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "চৈত্র";
            }
        } else if ( $engDate < 14 && $engDate > 1 ) { // Date 2-13
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "চৈত্র";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "চৈত্র";
            }
        } else if ( $engDate == 14 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 13;
                $bangMonth = "বৈশাখ";
            } else {
                $bangDate = 30;
                $bangMonth = "চৈত্র";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 13;
                $bangMonth = "বৈশাখ";
            } else {
                $bangDate = $engDate - 14;
                $bangMonth = "বৈশাখ";
            }
        }
    }

    /**
     * when English month is May
     */ else if ( $engMonth == 5 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "বৈশাখ";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "বৈশাখ";
            }
        } else if ( $engDate < 15 && $engDate > 1 ) { // Date 2-14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "বৈশাখ";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "বৈশাখ";
            }
        } else if ( $engDate == 15 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "জ্যৈষ্ঠ";
            } else {
                $bangDate = 31;
                $bangMonth = "চৈত্র";
            }
        } else { //Date 16-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "জ্যৈষ্ঠ";
            } else {
                $bangDate = $engDate - 15;
                $bangMonth = "জ্যৈষ্ঠ";
            }
        }
    }

    /**
     * when English month is June
     */ else if ( $engMonth == 6 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "জ্যৈষ্ঠ";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "জ্যৈষ্ঠ";
            }
        } else if ( $engDate < 15 && $engDate > 1 ) { // Date 2-14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 17;
                $bangMonth = "জ্যৈষ্ঠ";
            } else {
                $bangDate = $engDate + 16;
                $bangMonth = "জ্যৈষ্ঠ";
            }
        } else if ( $engDate == 15 ) { //Date 15
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "আষাঢ়";
            } else {
                $bangDate = 31;
                $bangMonth = "জ্যৈষ্ঠ";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "আষাঢ়";
            } else {
                $bangDate = $engDate - 13;
                $bangMonth = "আষাঢ়";
            }
        }
    }

    /**
     * when English month is July
     */ else if ( $engMonth == 7 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "আষাঢ়";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "আষাঢ়";
            }
        } else if ( $engDate < 16 && $engDate > 1 ) { // Date 2-15
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "আষাঢ়";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "আষাঢ়";
            }
        } else if ( $engDate == 16 ) { //Date 16
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "শ্রাবণ";
            } else {
                $bangDate = 31;
                $bangMonth = "আষাঢ়";
            }
        } else { //Date 17-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "শ্রাবণ";
            } else {
                $bangDate = $engDate - 16;
                $bangMonth = "শ্রাবণ";
            }
        }
    }

    /**
     * when English month is August
     */ else if ( $engMonth == 8 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "শ্রাবণ";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "শ্রাবণ";
            }
        } else if ( $engDate < 16 && $engDate > 1 ) { // Date 2-15
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "শ্রাবণ";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "শ্রাবণ";
            }
        } else if ( $engDate == 16 ) { //Date 16
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "ভাদ্র";
            } else {
                $bangDate = 31;
                $bangMonth = "শ্রাবণ";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "ভাদ্র";
            } else {
                $bangDate = $engDate - 16;
                $bangMonth = "ভাদ্র";
            }
        }
    }

    /**
     * when English month is September
     */ else if ( $engMonth == 9 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "ভাদ্র";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "ভাদ্র";
            }
        } else if ( $engDate < 16 && $engDate > 1 ) { // Date 2-15
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "ভাদ্র";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "ভাদ্র";
            }
        } else if ( $engDate == 16 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "আশ্বিন";
            } else {
                $bangDate = 31;
                $bangMonth = "ভাদ্র";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "আশ্বিন";
            } else {
                $bangDate = $engDate - 16;
                $bangMonth = "আশ্বিন";
            }
        }
    }

    /**
     * when English month is October
     */ else if ( $engMonth == 10 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 15;
                $bangMonth = "আশ্বিন";
            } else {
                $bangDate = $engDate + 14;
                $bangMonth = "আশ্বিন";
            }
        } else if ( $engDate < 16 && $engDate > 1 ) { // Date 2-15
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 15;
                $bangMonth = "আশ্বিন";
            } else {
                $bangDate = $engDate + 14;
                $bangMonth = "আশ্বিন";
            }
        } else if ( $engDate == 16 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "কার্তিক";
            } else {
                $bangDate = 30;
                $bangMonth = "আশ্বিন";
            }
        } else { //Date 17-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 15;
                $bangMonth = "কার্তিক";
            } else {
                $bangDate = $engDate - 16;
                $bangMonth = "কার্তিক";
            }
        }
    }

    /**
     * when English month is November
     */ else if ( $engMonth == 11 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "কার্তিক";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "কার্তিক";
            }
        } else if ( $engDate < 15 && $engDate > 1 ) { // Date 2-14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "কার্তিক";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "কার্তিক";
            }
        } else if ( $engDate == 15 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "অগ্রাহায়ণ";
            } else {
                $bangDate = 30;
                $bangMonth = "কার্তিক";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "অগ্রাহায়ণ";
            } else {
                $bangDate = $engDate - 15;
                $bangMonth = "অগ্রাহায়ণ";
            }
        }
    }

    /**
     * when English month is December
     */ else if ( $engMonth == 12 ) {
        if ( $engDate == 1 ) { //Date 1
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "অগ্রাহায়ণ";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "অগ্রাহায়ণ";
            }
        } else if ( $engDate < 15 && $engDate > 1 ) { // Date 2-14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate + 16;
                $bangMonth = "অগ্রাহায়ণ";
            } else {
                $bangDate = $engDate + 15;
                $bangMonth = "অগ্রাহায়ণ";
            }
        } else if ( $engDate == 15 ) { //Date 14
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "পৌষ";
            } else {
                $bangDate = 30;
                $bangMonth = "অগ্রাহায়ণ";
            }
        } else { //Date 15-31
            if ( $engHour >= 6 ) {
                $bangDate = $engDate - 14;
                $bangMonth = "পৌষ";
            } else {
                $bangDate = $engDate - 15;
                $bangMonth = "পৌষ";
            }
        }
    }
    $bangYear = getYear( $engHour, $engDate, $engMonth, $engYear );
    /**
     * returning values
     */
    $bangDate = banglaNumber( $bangDate );
    $bangYear = banglaNumber( $bangYear );
    return array($bangDate, $bangMonth, $bangYear);
}

/**
 * calculating year
 */
function getYear( $engHour, $engDate, $engMonth, $engYear ) {
    if ( $engMonth >= 4 ) {
        if ( $engMonth == 4 && $engDate < 14 ) { //1-13 on april when hour is greater than 6
            $bangYear = $engYear - 594;
        } else if ( $engMonth == 4 && $engDate == 14 && $engHour <= 5 ) {
            $bangYear = $engYear - 594;
        } else if ( $engMonth == 4 && $engDate == 14 && $engHour >= 6 ) {
            $bangYear = $engYear - 593;
        }
        /* else if($engMonth == 4 && ($engDate == 14 && $engDate) && $engHour <=5) //1-13 on april when hour is greater than 6
          {
          $bangYear = $engYear - 593;
          } */
        else
            $bangYear = $engYear - 593;
    }
    else
        $bangYear = $engYear - 594;

    return $bangYear;
}

/**
 * This function converts all english number's to bangla number
 */
function banglaNumber( $int ) {
    $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');

    $converted = str_replace( $engNumber, $bangNumber, $int );
    return $converted;
}
?>