const SortingIconArrow = document.querySelector('.sorting-panel-icon');
let open;
const rels = [
    ["#filter-item-1", ".filters-group__category"],
    ["#filter-item-2", ".filters-group__subCategory-1"],
    ["#filter-item-3", ".filters-group__filter-price"],
    ["#filter-item-4", ".filters-group__brands-change"],
    ["#filter-item-5", ".filters-group__colors"],
    ["#filter-item-6", ".filters-group__thickness"],
    ["#filter-item-7", ".filters-group__сorner-elements"]
];
addEventListener("click", ({
    target
}) => {
    if (target.closest(".open")) return;
    let item = rels.find(([selector, ..._]) => target.closest(selector));
    let itemTitle = rels.find(([selector, ..._]) => target.closest(selector));
    if (item && itemTitle) {
        item = document.querySelector(item[1]);
        itemTitle = document.querySelector(itemTitle[0]);
        for (const child of itemTitle.children) {
            child.classList.toggle("open");
        }
        if (!item && !itemTitle) return;
        item.classList.toggle("open");
        if (window.matchMedia("(max-width: 480px)").matches) {
            if (item.classList.contains('open')) {
                itemTitle.style.color = "#44392E";
            } else {
                itemTitle.style.color = "#86573D";
            }
        }
    }
});

const FilterOpen = document.querySelector('#filters-click');
const FiltersGroup = document.querySelector('.filters__filters-group-wrapper');
//прослушиваем событие клик по гамбургеру
FilterOpen.addEventListener('click', function () {
    FiltersGroup.classList.toggle('active');
    closeFilter.classList.toggle('active');
    bodyEl.classList.toggle('noscroll');
    toggleMenu.classList.toggle('toggle-menu-none');
});
const closeFilter = document.querySelector('.toggle-filters');
closeFilter.addEventListener('click', function () {
    this.classList.remove('active');
    FiltersGroup.classList.remove('active');
    closeFilter.classList.remove('active');
    bodyEl.classList.remove('noscroll');
    toggleMenu.classList.remove('toggle-menu-none');
});

try {
    const closeFilterBtn = document.querySelector('.filter-groups__btn-open');
    closeFilterBtn.addEventListener('click', function () {
        closeFilter.classList.remove('active');
        FiltersGroup.classList.remove('active');
        closeFilter.classList.remove('active');
        bodyEl.classList.remove('noscroll');
        toggleMenu.classList.remove('toggle-menu-none');
    });
} catch (error) {}