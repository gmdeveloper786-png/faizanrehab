@extends('layout.layoutone')
@section('title')
Gallery
@endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">Gallery</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a><span class="mx-2">/</span></li>
              <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
        <!-- Page Header Box End -->
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Page Gallery Start -->
<div class="page-gallery">
  <div class="container">
    <!-- Filter Buttons Start -->
    <div class="gallery-filters">
      <div class="row">
        <div class="col-lg-12">
          <div class="filter-buttons">
            <button class="btn-default-not-arrow filter-btn active" data-filter="all">All</button>
            <button class="btn-default-not-arrow filter-btn" data-filter="remedial-therapy">Remedial Therapy</button>
            <button class="btn-default-not-arrow filter-btn" data-filter="speech-therapy">Speech Therapy</button>
            <button class="btn-default-not-arrow filter-btn" data-filter="occupational-therapy">Occupational Therapy</button>
            <button class="btn-default-not-arrow filter-btn" data-filter="physiotherapy">Physiotherapy</button>
            <button class="btn-default-not-arrow filter-btn" data-filter="behavioral-therapy">Behavioral Therapy</button>
            <button class="btn-default-not-arrow filter-btn" data-filter="group-therapy">Group Therapy</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Filter Buttons End -->

    <!-- Gallery Grid Start -->
    <div class="gallery-grid">
      <div class="row" id="gallery-container">
        <!-- All Images - Initially showing 8, rest hidden -->
        <!-- Speech Therapy Images -->
        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="speech-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/speech-therapy/2.jpg') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/speech-therapy/2.jpg') }}" alt="speech-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="speech-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/speech-therapy/3.jpg') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/speech-therapy/3.jpg') }}" alt="speech-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="speech-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/speech-therapy/4.jpg') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/speech-therapy/4.jpg') }}" alt="speech-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="speech-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/speech-therapy/5.jpg') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/speech-therapy/5.jpg') }}" alt="speech-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <!-- Occupational Therapy Images -->
        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="occupational-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/occupational-therapy/2.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/occupational-therapy/2.png') }}" alt="occupational-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="occupational-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/occupational-therapy/3.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/occupational-therapy/3.png') }}" alt="occupational-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="occupational-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/occupational-therapy/4.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/occupational-therapy/4.png') }}" alt="occupational-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="occupational-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/occupational-therapy/5.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/occupational-therapy/5.png') }}" alt="occupational-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>        

        <!-- Physiotherapy Images -->
        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="physiotherapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/physiotherapy/2.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/physiotherapy/2.png') }}" alt="physiotherapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="physiotherapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/physiotherapy/3.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/physiotherapy/3.png') }}" alt="physiotherapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="physiotherapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/physiotherapy/4.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/physiotherapy/4.png') }}" alt="physiotherapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="physiotherapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/physiotherapy/5.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/physiotherapy/5.png') }}" alt="physiotherapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <!-- Behavioral Therapy Images -->
        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="behavioral-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/behavioral-therapy/2.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/behavioral-therapy/2.png') }}" alt="behavioral-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="behavioral-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/behavioral-therapy/3.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/behavioral-therapy/3.png') }}" alt="behavioral-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="behavioral-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/behavioral-therapy/4.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/behavioral-therapy/4.png') }}" alt="behavioral-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="behavioral-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/behavioral-therapy/5.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/behavioral-therapy/5.png') }}" alt="behavioral-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <!-- Remedial Therapy Images -->
        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="remedial-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/remedial-therapy/2.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/remedial-therapy/2.png') }}" alt="remedial-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="remedial-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/remedial-therapy/3.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/remedial-therapy/3.png') }}" alt="remedial-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="remedial-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/remedial-therapy/4.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/remedial-therapy/4.png') }}" alt="remedial-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="remedial-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/remedial-therapy/5.jpg') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/remedial-therapy/5.jpg') }}" alt="remedial-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <!-- Group Therapy Images -->
        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="group-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/group-therapy/2.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/group-therapy/2.png') }}" alt="group-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="group-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/group-therapy/3.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/group-therapy/3.png') }}" alt="group-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="group-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/group-therapy/4.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/group-therapy/4.png') }}" alt="group-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 gallery-item hidden-gallery-item" data-category="group-therapy">
          <div class="gallery-image-box">
            <a href="{{ asset('images/services/group-therapy/5.png') }}" class="gallery-popup">
              <figure class="image-anime">
                <img src="{{ asset('images/services/group-therapy/5.png') }}" alt="group-therapy-image">
                <div class="gallery-overlay">
                  <span class="gallery-icon">+</span>
                </div>
              </figure>
            </a>
          </div>
        </div>


      </div>
    </div>
    <!-- Gallery Grid End -->

    <!-- Load More Section Start -->
    <div class="load-more-section">
      <div class="row">
        <div class="col-lg-12 text-center">
          <button class="btn-default-not-arrow load-more-btn" id="loadMoreBtn">Load More</button>
          <p class="gallery-count-text" id="galleryCountText">Showing 8 of 16 images</p>
        </div>
      </div>
    </div>
    <!-- Load More Section End -->
  </div>
</div>
<!-- Page Gallery End -->

<!-- Gallery Scripts -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const hiddenItems = document.querySelectorAll('.hidden-gallery-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const galleryCountText = document.getElementById('galleryCountText');
    const totalImages = galleryItems.length;
    const itemsPerLoad = 4;
    let currentVisibleCount = 8;

    // Initialize - hide all items first, then show first 8 for "All" tab
    galleryItems.forEach(item => {
      item.style.display = 'none';
    });

    // Show first 8 items for "All" tab on page load
    let initialCount = 0;
    galleryItems.forEach(item => {
      if (initialCount < 8) {
        item.style.display = 'block';
        initialCount++;
      }
    });

    // Filter Functionality
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');

        // Update active button
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');

        // Reset - hide all items first
        galleryItems.forEach(item => {
          item.style.display = 'none';
        });
        
        // Show/hide items based on filter
        if (filter === 'all') {
          // For "All" tab: Show first 8 items (regardless of hidden-gallery-item class)
          let visibleCount = 0;
          galleryItems.forEach(item => {
            if (visibleCount < 8) {
              item.style.display = 'block';
              visibleCount++;
            } else {
              item.style.display = 'none';
            }
          });
        } else {
          // For other tabs: Show first 4 items of that category
          const categoryItems = Array.from(galleryItems).filter(item => 
            item.getAttribute('data-category') === filter
          );
          
          let visibleCount = 0;
          
          galleryItems.forEach(item => {
            const category = item.getAttribute('data-category');
            
            if (category === filter) {
              if (visibleCount < 4) {
                item.style.display = 'block';
                visibleCount++;
              } else {
                item.style.display = 'none';
              }
            } else {
              item.style.display = 'none';
            }
          });
        }

        updateGalleryCount();
      });
    });

    // Load More Functionality
    function updateGalleryCount() {
      const currentFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
      let visibleCount = 0;
      let totalCount = 0;

      if (currentFilter === 'all') {
        totalCount = totalImages;
        visibleCount = Array.from(galleryItems).filter(item => 
          item.style.display !== 'none'
        ).length;
      } else {
        const filteredItems = Array.from(galleryItems).filter(item => 
          item.getAttribute('data-category') === currentFilter
        );
        totalCount = filteredItems.length;
        visibleCount = filteredItems.filter(item => 
          item.style.display !== 'none'
        ).length;
      }

      galleryCountText.textContent = `Showing ${visibleCount} of ${totalCount} images`;

      // Hide load more button if all images are visible
      if (visibleCount >= totalCount) {
        loadMoreBtn.style.display = 'none';
      } else {
        loadMoreBtn.style.display = 'inline-block';
      }
    }

    loadMoreBtn.addEventListener('click', function() {
      const currentFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
      let itemsToShow = [];

      if (currentFilter === 'all') {
        // For "All" tab: Show next 4 items that are currently hidden
        itemsToShow = Array.from(galleryItems).filter(item => item.style.display === 'none');
      } else {
        // For other tabs: Show next 4 items of that category that are currently hidden
        itemsToShow = Array.from(galleryItems).filter(item => 
          item.getAttribute('data-category') === currentFilter && 
          item.style.display === 'none'
        );
      }

      // Show next 4 items
      itemsToShow.slice(0, itemsPerLoad).forEach(item => {
        item.style.display = 'block';
      });

      updateGalleryCount();
    });

    // Initialize Magnific Popup for lightbox
    if (typeof $.fn.magnificPopup !== 'undefined') {
      $('.gallery-popup').magnificPopup({
        type: 'image',
        gallery: {
          enabled: true
        },
        mainClass: 'mfp-fade'
      });
    }

    // Initialize count
    updateGalleryCount();
  });
</script>

@endsection
