<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use App\Http\Controllers\FeedbackController;
use function Termwind\style;

route::get("/contact", [ContactController::class,"contact"])->name("contact");
route::post("/contact", function(Request $request){
    $validated = $request->validate([
        'name' => 'required|min:5',
        'message' => 'required|max:200',
    ]);
    return "Thanks,{$validated['name']}.  your message was:{$validated['message']}";
});


Route::get("/FAQ", [FAQController::class, "FAQ"])->name("FAQ");

Route::get("/", [PageController::class, "index"])->name("index");

route::get("/about", [pageController::class,"about"])->name("about");

route::get("/feedback", [FeedbackController::class, "feedback"])->name("feedback");

Route::post('/feedback', function (Request $request): string {
    $validated = $request->validate([
        'name' => 'required|min:5',
        'feedback' => 'required|max:100',

    ]);
    return "
      <div style='background-color: #008000; color: white; padding: 10px;' >
            Thank you,{$validated['name']}. your feedback has  been  recorded:{$validated['feedback']}
     </div>
    ";
});