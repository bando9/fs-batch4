const products = [
  {
    id: 1,
    nama: "Wireless Headphone ZX300",
    harga: 499000,
    deskripsi:
      "Headphone Bluetooth dengan kualitas suara premium, baterai tahan hingga 24 jam, cocok untuk kerja dan hiburan.",
    kategori: "Elektronik",
  },
  {
    id: 2,
    nama: "Smartwatch FitLife Pro",
    harga: 899000,
    deskripsi:
      "Smartwatch dengan pemantau detak jantung, sleep tracker, dan notifikasi real-time. Tahan air IP68.",
    kategori: "Elektronik",
  },
  {
    id: 3,
    nama: "Tas Ransel Kulit Urban Style",
    harga: 299000,
    deskripsi:
      "Tas ransel berbahan kulit sintetis premium, muat laptop 15 inch, dengan banyak kantong penyimpanan.",
    kategori: "Fashion",
  },
  {
    id: 4,
    nama: "Botol Minum Stainless 1L",
    harga: 79000,
    deskripsi:
      "Botol minum tahan panas & dingin hingga 12 jam. Desain minimalis dan ramah lingkungan.",
    kategori: "Perlengkapan Rumah",
  },
  {
    id: 5,
    nama: "Keyboard Mechanical RGB TKL",
    harga: 599000,
    deskripsi:
      "Keyboard gaming tenkeyless dengan lampu RGB, switch biru kliky, dan build quality kokoh.",
    kategori: "Komputer & Aksesoris",
  },
];

const rupiah = (number) => {
  return new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
  }).format(number);
};

const root = document.getElementById("root");

products.forEach((item) => {
  const li = document.createElement("li");
  li.innerHTML = `Kategori ${item.kategori}. ${
    item.nama
  } dengan harga Rp. ${rupiah(item.harga)}. ${item.deskripsi}  `;
  root.appendChild(li);
});

const productCategories = [
  "komputer & aksesoris",
  "perlengkapan rumah",
  "fashion",
  "elektronik",
];

const inputFilter = document.getElementById("input-filter");
const form = document.getElementById("form-filter");
const filterShow = document.getElementById("filter-show");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  filterShow.innerHTML = "";

  const userFilter = inputFilter.value.trim().toLowerCase();
  if (!userFilter) return;

  const isValidCategory = productCategories.includes(userFilter.toLowerCase());

  if (!isValidCategory) {
    filterShow.innerHTML = "Produk tidak ditemukan untuk kategori ini.";
    return;
  }

  const currFilter = products.filter(
    (item) => item.kategori.toLowerCase() == userFilter
  );

  if (currFilter.length == 0) {
    filterShow.innerHTML = "Tidak ada produk pada kategori ini.";
    return;
  }

  currFilter.forEach((item) => {
    const li = document.createElement("li");
    li.textContent = `${item.nama} dengan harga Rp. ${rupiah(item.harga)}. ${
      item.deskripsi
    }  `;
    filterShow.appendChild(li);
  });
});
