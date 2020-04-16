<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class CalendarDateComposer {
  public function compose(View $view) {
    // 日付をViewにセットする
    $todayString = date('Y/m/d');
    $view->with('todayString', $todayString);
  }
}