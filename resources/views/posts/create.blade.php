<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
</head>
<body style="font-family: Arial, sans-serif;margin: 0;padding: 40px;background-color: #f4f4f9;
">

    <div style="max-width: 600px;margin: 0 auto;background-color: white;padding: 30px;border-radius: 8px;box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    ">
        
        <h1 style="color: #333;margin-bottom: 30px;font-size: 28px;
        ">Create New Post</h1>

        <!-- Form: POST request /posts par -->
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <!-- Title Field -->
            <div style="margin-bottom: 20px;">
                <label style="
                    display: block;             
                    margin-bottom: 8px;          
                    font-weight: bold;           
                    color: #333;                 
                ">Title:</label>
                
                <input type="text" name="title" value="{{ old('title') }}" style="
                    width: 100%;                
                    padding: 12px;               
                    border: 1px solid #ddd;     
                    border-radius: 4px;        
                    font-size: 16px;           
                    box-sizing: border-box;     
                " required>

                <!-- Validation Error Message -->
                @error('title')
                    <span style="
                        color: #dc3545;         
                        font-size: 14px;         
                        margin-top: 5px;        
                        display: block;         
                    ">{{ $message }}</span>
                @enderror
            </div>

            <!-- Author Field -->
            <div style="margin-bottom: 20px;">
                <label style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: bold;
                    color: #333;
                ">Author:</label>
                
                <input type="text" name="author" value="{{ old('author') }}" style="
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    font-size: 16px;
                    box-sizing: border-box;
                " required>

                @error('author')
                    <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Description Field -->
            <div style="margin-bottom: 20px;">
                <label style="
                    display: block;
                    margin-bottom: 8px;
                    font-weight: bold;
                    color: #333;
                ">Description:</label>
                
                <textarea name="description" rows="5" style="
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    font-size: 16px;
                    box-sizing: border-box;
                    resize: vertical;            
                ">{{ old('description') }}</textarea>

                @error('description')
                    <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" style="
                background-color: #28a745;       
                color: white;                    /* White text */
                padding: 14px 28px;              /* Spacing */
                border: none;                    /* Border nahi */
                border-radius: 4px;              /* Rounded corners */
                font-size: 16px;                 /* Font size */
                cursor: pointer;                 /* Hand icon on hover */
                font-weight: bold;               /* Bold text */
                width: 100%;                     /* Poori width */
            ">Create Post</button>

            <!-- Cancel Link -->
            <a href="{{ route('posts.index') }}" style="
                display: block;                  /* Block element */
                text-align: center;              /* Center align */
                margin-top: 15px;                /* Upar 15px spacing */
                color: #007bff;                  /* Blue color */
                text-decoration: none;           /* No underline */
            ">Cancel</a>

        </form>

    </div>

</body>
</html>