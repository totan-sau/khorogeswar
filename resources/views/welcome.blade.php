@extends('layouts.common')

@push('css')
    <style>
        /* Modal container styles */
        #image-modal {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Black overlay with transparency */
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        /* Image inside the modal */
        #image-modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
        }

        /* Close button */
        #close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 25px;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
        }

        #close-modal:hover {
            color: red;
        }
    </style>
@endpush
@section('content')
    @include('layouts.about-us')
    @include('layouts.pujas')
    @include('layouts.donation')
    @include('layouts.volunteers')
    <div id="image-modal">
        <button id="close-modal">&times;</button>
        <img src="assets/img/shivaratri2025.jpeg" alt="Popup Image">
    </div>
@endsection

@push('js')
    <script>
        // Date Configuration
        const expiryDate = new Date('2025-02-26T23:59:59'); // Set the expiry date
        const currentDate = new Date();

        // Modal Elements
        const modal = document.getElementById('image-modal');
        const closeModal = document.getElementById('close-modal');

        // Check if the current date is before the expiry date
        if (currentDate < expiryDate) {
            modal.style.display = 'flex'; // Show the modal
        }

        // Close the modal when the close button is clicked
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close the modal if the user clicks outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
@endpush