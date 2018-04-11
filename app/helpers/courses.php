<?php
use App\Content;

function courseWeek($id)
{
  $week1 = Content::where('course_id', $id)->where('week_no', 1)->count();
  $week2 = Content::where('course_id', $id)->where('week_no', 2)->count();
  $week3 = Content::where('course_id', $id)->where('week_no', 3)->count();
  $week4 = Content::where('course_id', $id)->where('week_no', 4)->count();
  $week5 = Content::where('course_id', $id)->where('week_no', 5)->count();
  $week6 = Content::where('course_id', $id)->where('week_no', 6)->count();

  $weeks = array($week1, $week2, $week3, $week4, $week5, $week6);
  return $weeks;
}

function getICourse($id, $week, $no)
{
  if ($week > 0) {
    $number = $no;
    $weekContents = Content::where('course_id', $id)->where('week_no', $no)->get();
    $value = array($weekContents, $number);

    return $value;
  }
}

function selectCategory($id, $weekNo, $contentId, $no)
{
  $select = Content::where('course_id', $id)->where('week_no', $weekNo)->where('content_number', $contentId)->where('category_id', $no)->get()->last();

  return $select;
}
