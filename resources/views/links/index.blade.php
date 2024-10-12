<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branchout | My Bio</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{ asset('css/' . $template . '.css') }}">
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon1.svg') }}">

</head>
<style>
@font-face {
    font-family: 'Link Sans';
    src: url('./fonts/LinikSans-Black.woff') format('woff');
    font-weight: bold;
    font-style: normal;
}
</style>
<body>

    <div>
        @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf

                <button class="Btn" type="submit">

                  <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>

                  <div class="text">Logout</div>
                </button>



            </form>
        @else
            <a href="{{ route('register') }}">Register</a>
            <a href="{{ route('login') }}">Login</a>
        @endif
    </div>

    <div class="content">
        <div class="add-button">
            <button id="addNewLinkBtn">+ New Link</button>
        </div>

        <dialog class="dialog1" id="addNewLinkDialog">
            <form action="{{ route('links.store', ['template' => request('template')]) }}" method="POST" >
                @csrf
                <h2>Add New Link</h2>
                <input placeholder="Link Name" type="text" name="link_title" required><br><br>
                <input type="text" placeholder="Link URL" name="link_url" required><br><br>
                <button class="add" type="submit">Add</button>
                <button class="cancel" type="button" id="closeAddNewLinkDialog">Cancel</button>
            </form>
        </dialog>

        <div class="d1">
            <div class="wrapper">
                <video loop autoplay muted  src="./Man Profile.mp4" class="image--cover" >
                </video>
                <div class="d1-text">
                    <h2><span>@</span> {{ Auth::user()->name }}</h2>

                </div>
            </div>

            <div class="d1-links">
                @foreach ($links as $link)
                    <div class="l1">
                        <a href="{{ $link->url }}" class="link">
                            <div class="l1-text">{{ $link->title }}</div>
                        </a>
                        <button class="openDialogBtn" data-dialog="actionDialog{{ $loop->index }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#111">
                                <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z"/>
                            </svg>
                        </button>

                        <dialog class="myDialog2" id="actionDialog{{ $loop->index }}">
                            <div class="img-div">
                                <img src="./wired-lineal-2234-firework-hover-launch.gif">
                            </div>
                            <p style="font-size: 2rem;font-family: Lobster, sans-serif; font-weight: 400; font-style: normal; color: #37055e;">Welcome to the action bar.</p>
                            <div class="btns">
                                <div class="btn-with-label">
                                    <button title="Edit" class="editBtn" data-dialog="editDialog{{ $loop->index }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="auto" width="30" viewBox="0 -960 960 960" fill="#111">
                                            <path d="M160-120v-170l527-526q12-12 27-18t30-6q16 0 30.5 6t25.5 18l56 56q12 11 18 25.5t6 30.5q0 15-6 30t-18 27L330-120H160Zm80-80h56l393-392-28-29-29-28-392 393v56Zm560-503-57-57 57 57Zm-139 82-29-28 57 57-28-29ZM560-120q74 0 137-37t63-103q0-36-19-62t-51-45l-59 59q23 10 36 22t13 26q0 23-36.5 41.5T560-200q-17 0-28.5 11.5T520-160q0 17 11.5 28.5T560-120ZM183-426l60-60q-20-8-31.5-16.5T200-520q0-12 18-24t76-37q88-38 117-69t29-70q0-55-44-87.5T280-840q-45 0-80.5 16T145-785q-11 13-9 29t15 26q13 11 29 9t27-13q14-14 31-20t42-6q41 0 60.5 12t19.5 28q0 14-17.5 25.5T262-654q-80 35-111 63.5T120-520q0 32 17 54.5t46 39.5Z"/>
                                        </svg>
                                    </button>
                                    <span class="btn-label">Edit</span>
                                </div>
                                <div class="btn-with-label">
                                    <button title="Copy link" class="copyLinkBtn" data-link="{{$link->url}}" onclick="copyLink(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="auto" width="30px" viewBox="0 -960 960 960" fill="#111">
                                            <path d="M440-280H280q-83 0-141.5-58.5T80-480q0-83 58.5-141.5T280-680h160v80H280q-50 0-85 35t-35 85q0 50 35 85t85 35h160v80ZM320-440v-80h320v80H320Zm200 160v-80h160q50 0 85-35t35-85q0-50-35-85t-85-35H520v-80h160q83 0 141.5 58.5T880-480q0 83-58.5 141.5T680-280H520Z"/>
                                        </svg>
                                    </button>
                                    <span class="btn-label">Copy link</span>
                                </div>

                                <div class="btn-with-label">
                                    <form method="POST" action="{{ route('links.destroy', ['link' => $link->id, 'template' => request('template')]) }}"  onsubmit="return confirm('Are you sure you want to delete this link?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Delete" class="deleteBtn">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="auto" width="30px" fill="#111" viewBox="0 -960 960 960">
                                                <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                            </svg>
                                        </button>
                                    </form>

                                    <span class="btn-label">Delete</span>
                                </div>
                            </div>
                            <button class="closeDialogBtn2" data-dialog="actionDialog{{ $loop->index }}">Close</button>
                        </dialog>

                        <dialog class="editDialog" id="editDialog{{ $loop->index }}">
                            <form method="POST"action="{{ route('links.update', ['link' => $link->id, 'template' => request('template')]) }}" >
                                @csrf
                                @method('PUT')
                                <div class="img-div2">
                                    <img src="./wired-lineal-35-edit-hover-circle.gif">
                                </div>
                                <div class="edit-links">
                                    <input placeholder="Edit Link Name" type="text" name="title" value="{{ $link->title }}" required><br><br>
                                    <input type="text" placeholder="Edit Link URL" name="url" value="{{ $link->url }}" required><br><br>
                                </div>
                                <button class="saveEdit" type="submit">Save</button>
                                <button style=" background-color: transparent;
    color: #111;
    border-radius: 14px;
    border: 2px solid #111;
    padding: 1em;
    font-weight: bold;
    width: 100px;
    font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
" class="cancelEdit" type="button" data-dialog="editDialog{{ $loop->index }}">Cancel</button>
                            </form>
                        </dialog>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="logo-container">
        <span class="logo-text">Branch Out <svg class="logo" fill="#000000" style="margin-bottom: -8px;" height="auto" width="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>branch</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M44,9a7,7,0,1,0-9,6.7V16a6,6,0,0,1-6,6H21a10.3,10.3,0,0,0-6,2V15.7a7,7,0,1,0-4,0V32.3a7,7,0,1,0,4,0V32a6,6,0,0,1,6-6h8A10,10,0,0,0,39,16v-.3A7,7,0,0,0,44,9ZM10,9a3,3,0,0,1,6,0,3,3,0,0,1-6,0Zm6,30a3,3,0,1,1-3-3A2.9,2.9,0,0,1,16,39ZM37,12a2.9,2.9,0,0,1-3-3,3,3,0,0,1,6,0A2.9,2.9,0,0,1,37,12Z"></path> </g> </g> </g></svg></span>
    </div>

    <script>
        function copyLink(button) {
            // Get the link from the button's data attribute
            const link = button.getAttribute('data-link');

            // Use the Clipboard API to copy the link
            navigator.clipboard.writeText(link).then(() => {
                // Optionally, provide feedback to the user
                alert('Link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
        </script>
    <script>
        // Function to open a dialog
        function openDialog(dialogId) {
            document.getElementById(dialogId).showModal();
        }

        // Function to close a dialog
        function closeDialog(dialogId) {
            document.getElementById(dialogId).close();
        }

        // Event listener for the "Add New Link" button
        document.getElementById('addNewLinkBtn').addEventListener('click', () => openDialog('addNewLinkDialog'));
        document.getElementById('closeAddNewLinkDialog').addEventListener('click', () => closeDialog('addNewLinkDialog'));

        // Event listeners for opening action dialogs
        document.querySelectorAll('.openDialogBtn').forEach(button => {
            button.addEventListener('click', () => openDialog(button.getAttribute('data-dialog')));
        });

        // Event listeners for closing action dialogs
        document.querySelectorAll('.closeDialogBtn2').forEach(button => {
            button.addEventListener('click', () => closeDialog(button.getAttribute('data-dialog')));
        });

        // Event listeners for opening edit dialogs
        document.querySelectorAll('.editBtn').forEach(button => {
            button.addEventListener('click', () => {
                closeDialog(button.closest('.myDialog2').id);
                openDialog(button.getAttribute('data-dialog'));
            });
        });

        // Event listeners for closing edit dialogs
        document.querySelectorAll('.cancelEdit').forEach(button => {
            button.addEventListener('click', () => closeDialog(button.getAttribute('data-dialog')));
        });

        // Event listeners for delete buttons

        </script>
<script>
    const dialogTriggerBtn = document.getElementById('openDialogBtn');
    const dialogCloseBtn = document.getElementById('closeDialogBtn2');
    const dialogBox = document.getElementById('myDialog2');

    // Open the dialog when the button is clicked
    dialogTriggerBtn.addEventListener('click', () => {
        dialogBox.showModal();
    });

    // Close the dialog when the close button is clicked
    dialogCloseBtn.addEventListener('click', () => {
        dialogBox.close();
    });
</script>
    <script>
        const dialog = document.getElementById('myDialog');
        const openDialogBtn = document.querySelector('.add-button button');
        const closeDialogBtn = document.getElementById('closeDialogBtn');

        // Open the dialog when the "+Add" button is clicked
        openDialogBtn.addEventListener('click', () => {
            dialog.showModal(); // Show the dialog as a modal
        });

        // Close the dialog when "Cancel" button is clicked
        closeDialogBtn.addEventListener('click', () => {
            dialog.close(); // Close the dialog
        });
    </script>

<script>
   document.querySelectorAll('.openDialogBtn').forEach((button, index) => {
    const dialog = document.querySelectorAll('.myDialog2')[index]; // Matching dialog
    button.addEventListener('click', () => {
        dialog.showModal();
    });
});

document.querySelectorAll('.closeDialogBtn2').forEach((button, index) => {
    const dialog = document.querySelectorAll('.myDialog2')[index]; // Matching dialog
    button.addEventListener('click', () => {
        dialog.close();
    });
});
const copyLinkBtns = document.querySelectorAll('.copyLinkBtn');
        copyLinkBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const link = btn.getAttribute('data-link');
                navigator.clipboard.writeText(link).then(() => {
                    alert('Link copied to clipboard!');
                }).catch((err) => {
                    console.error('Failed to copy link: ', err);
                });
            });
        });
    });

</script>
<script>
    // Select all edit buttons
const editButtons = document.querySelectorAll('.editBtn');

// Loop through all the buttons
editButtons.forEach((editBtn, index) => {
    // Get the corresponding edit dialog for each button
    const editDialog = editBtn.closest('.l1').querySelector('.editDialog');
    const closeEditDialogBtn = editDialog.querySelector('.cancelEdit');

    // Open the respective Edit Dialog
    editBtn.addEventListener('click', () => {
        editDialog.showModal();
    });

    // Close the respective Edit Dialog
    closeEditDialogBtn.addEventListener('click', () => {
        editDialog.close();
    });
});

</script>

</body>
</html>
