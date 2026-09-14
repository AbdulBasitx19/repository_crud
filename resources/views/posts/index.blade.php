<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body style="font-family: Arial, sans-serif;margin: 0;padding: 40px; background-color: #f4f4f9;">
    <div style="max-width: 1200px; margin: 0 auto; background-color: white; padding: 30px;border-radius: 8px;box-shadow: 0 2px 10px rgba(0,0,0,0.1); ">

        <div style="display: flex;justify-content: space-between;align-items: center;margin-bottom: 30px;    
        ">
            <h1 style="
                color: #333;         
                margin: 0;        
                font-size: 32px;     
            ">All Posts</h1>
            
            <a href="{{ route('posts.create') }}" style="
                display: inline-block;      
                background-color: #1aaa62;   
                color: white;               
                padding: 12px 24px;        
                text-decoration: none;      
                border-radius: 5px;          
                font-weight: bold;         
                transition: background-color 0.3s; 
            "> Create New Post</a>
        </div>

        @if(session('success'))
            <div style="
                background-color: #d4edda;   
                color: #155724;             
                padding: 15px;               
                border-radius: 5px;         
                margin-bottom: 20px;        
                border-left: 4px solid #28a745; 
            ">
                {{ session('success') }}
            </div>
        @endif

        <table style="
            width: 100%;             
            border-collapse: collapse; 
            margin-top: 20px;         
        ">

            <thead>
                <tr style="
                    background-color: #07417e; 
                    color: white;              
                ">
                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">ID</th>
                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Title</th>
                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Author</th>
                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Description</th>
                    <th style="padding: 15px; text-align: center; border-bottom: 2px solid #ddd;">Actions</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach($posts as $post)
                    <tr style="
                        border-bottom: 1px solid #ddd;  
                        transition: background-color 0.2s;  
                    " onmouseover="this.style.backgroundColor='#f8f9fa'" onmouseout="this.style.backgroundColor='white'">
                        <!-- ID Column -->
                        <td style="padding: 15px;">{{ $post->id }}</td>
                        
                        <!-- Title Column -->
                        <td style="padding: 15px; font-weight: bold;">{{ $post->title }}</td>
                        
                        <!-- Author Column -->
                        <td style="padding: 15px;">{{ $post->author }}</td>
                        
                        <!-- Description Column -->
                        <td style="padding: 15px; color: #666;">
                            {{ Str::limit($post->description, 50) }}
                        </td>
                        
                        <!-- Actions Column -->
                        <td style="padding: 15px; text-align: center;">
                            <a href="{{ route('posts.edit', $post->id) }}" style="
                                display: inline-block;
                                background-color: #ffc107; 
                                color: #333;               
                                padding: 8px 16px;          
                                text-decoration: none;       
                                border-radius: 4px;         
                                margin-right: 10px;          
                                font-size: 14px;            
                            ">Edit</a>

                            <!-- Delete Form -->
                            <!-- DELETE method ke liye form zaroori hai -->
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="
                                    /* CSS: Delete button ki styling */
                                    background-color: #dc3545;   /* Red color */
                                    color: white;                /* White text */
                                    padding: 8px 16px;           /* Spacing */
                                    border: none;                /* Border hata deta hai */
                                    border-radius: 4px;          /* Rounded corners */
                                    cursor: pointer;             /* Mouse par hand icon */
                                    font-size: 14px;             /* Font size */
                                " onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Agar koi post nahi hai -->
        @if($posts->isEmpty())
            <div style="
                text-align: center;    
                padding: 40px;       
                color: #999;             
            ">
                <p style="font-size: 18px;">No posts found.</p>
                <p>Create your first post by clicking the button above!</p>
            </div>
        @endif

    </div>

</body>
</html>