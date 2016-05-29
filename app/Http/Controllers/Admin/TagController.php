<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagCreateRequest;
use App\Http\Requests\TagUpdateRequest;

class TagController extends Controller
{
    public function index()
	{
    	$tags = Tag::all();
   		return view('admin.tag.index')->withTags($tags);
	}

	protected $fields = [
        'tag' => '',
        'title' => '',
        'subtitle' => '',
        'meta_description' => '',
        'page_image' => '',
        'layout' => 'blog.layouts.index',
        'reverse_direction' => 0,
    ];

    // 替换 create() 方法如下
    /**
     * Show form for creating new tag
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('admin.tag.create', $data);
    }
    
	// 修改 store() 方法代码如下
	/**
	 * Store the newly created tag in the database.
	 *
	 * @param TagCreateRequest $request
	 * @return Response
	 */
	public function store(TagCreateRequest $request)
	{
	    $tag = new Tag();
	    foreach (array_keys($this->fields) as $field) {
	        $tag->$field = $request->get($field);
	    }
	    $tag->save();

	    return redirect('/admin/tag')->withSuccess("The tag '$tag->tag' was created.");
	}    

	/**
	 * 修改Tag
	 *
	 * @param int $id
	 * @return Response
	 */
	public function edit($id)
	{
	    $tag = Tag::findOrFail($id);
	    $data = ['id' => $id];
	    foreach (array_keys($this->fields) as $field) {
	        $data[$field] = old($field, $tag->$field);
	    }

	    return view('admin.tag.edit', $data);
	}

	/**
	 * Delete the tag
	 * 删除Tags
	 * @param int $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    $tag = Tag::findOrFail($id);
	    $tag->delete();

	    return redirect('/admin/tag')
	                    ->withSuccess("The '$tag->tag' tag has been deleted.");
	}


	// 替换 update() 方法如下
	/**
	 * Update the tag in storage
	 *
	 * @param TagUpdateRequest $request
	 * @param int $id
	 * @return Response
	 */
	public function update(TagUpdateRequest $request, $id)
	{
	    $tag = Tag::findOrFail($id);

	    foreach (array_keys(array_except($this->fields, ['tag'])) as $field) {
	        $tag->$field = $request->get($field);
	    }
	    $tag->save();

	    return redirect("/admin/tag/$id/edit")
	                    ->withSuccess("Changes saved.");
	}

}
