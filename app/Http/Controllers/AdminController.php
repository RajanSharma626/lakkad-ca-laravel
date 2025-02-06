<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Testimonial Page
    public function testimonial()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')
            ->get();
        return view('admin.testimonial', compact('testimonials'));
    }

    public function manageTestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.add-testimonial', compact('testimonial'));
    }

    public function updateTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'id' => 'required',
            'testimonial' => 'required',
        ]);

        $testimonial = Testimonial::find($request->id);
        $testimonial->name = $request->name;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();

        return redirect('/admin/testimonials')->with('success', 'Testimonial updated successfully');
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect('/admin/testimonials')->with('success', 'Testimonial deleted successfully');
    }


    public function addTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'testimonial' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();

        return redirect('/admin/testimonials')->with('success', 'Testimonial added successfully');
    }


    // faq Page
    public function faq()
    {
        $faqs = Faq::orderBy('id', 'desc')
            ->get();

        return view('admin.faq', compact('faqs'));
    }

    public function manageFaq($id)
    {
        $faq = Faq::find($id);
        return view('admin.add-faq', compact('faq'));
    }

    public function addFaq(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect('/admin/faqs')->with('success', 'FAQ added successfully');
    }

    public function updateFaq(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'id' => 'required',
            'answer' => 'required',
        ]);

        $faq = Faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect('/admin/faqs')->with('success', 'FAQ updated successfully');
    }

    public function deleteFaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/admin/faqs')->with('success', 'FAQ deleted successfully');
    }
}
