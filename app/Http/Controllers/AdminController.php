<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function createProduct()
    {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());
        return redirect()->route('admin.products')->with('success', 'Məhsul yaradıldı.');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('admin.products')->with('success', 'Məhsul yeniləndi.');
    }

    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Məhsul silindi.');
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function createBlog()
    {
        return view('admin.blogs.create');
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Blog::create($request->all());
        return redirect()->route('admin.blogs')->with('success', 'Blog yaradıldı.');
    }

   
    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect()->route('admin.blogs')->with('success', 'Blog yeniləndi.');
    }

    public function destroyBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blogs')->with('success', 'Blog silindi.');
    }

    public function team()
    {
        $teamMembers = Team::all();
        return view('admin.team.index', compact('teamMembers'));
    }

   
    public function createTeam()
    {
        return view('admin.team.create');
    }

    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);

        Team::create($request->all());
        return redirect()->route('admin.team')->with('success', 'Komanda üzvü yaradıldı.');
    }

    public function editTeam($id)
    {
        $teamMember = Team::findOrFail($id);
        return view('admin.team.edit', compact('teamMember'));
    }

    public function updateTeam(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);

        $teamMember = Team::findOrFail($id);
        $teamMember->update($request->all());
        return redirect()->route('admin.team')->with('success', 'Komanda üzvü yeniləndi.');
    }

    public function destroyTeam($id)
    {
        $teamMember = Team::findOrFail($id);
        $teamMember->delete();
        return redirect()->route('admin.team')->with('success', 'Komanda üzvü silindi.');
    }
}
