import { useState } from "react";

export default function FeaturesUI() {
  const items = [
    {
      title: "Multi Bahasa",
      desc: "SAFFMedic mendukung multi bahasa agar seluruh pasien dan user lebih mudah memahami fitur.",
      icon: "https://i.ibb.co/BsC4PwD/doc.png",
      img: "https://placehold.co/400x250?text=Preview",
    },
    {
      title: "Kalender & Jadwal",
      desc: "Menjadwalkan tindakan medis, memonitor antrean, dan memastikan ketersediaan dokter.",
      icon: "https://i.ibb.co/zxmBZ3D/calendar.png",
      img: "https://placehold.co/400x250?text=Preview",
    },
    {
      title: "Deposit Pelayanan",
      desc: "Memungkinkan pembayaran awal agar jadwal tindakan aman dan terkonfirmasi.",
      icon: "https://i.ibb.co/4PCkLRN/deposit.png",
      img: "https://placehold.co/400x250?text=Preview",
    },
    {
      title: "Pesan Pelayanan",
      desc: "Pasien bisa ajukan permintaan tindakan langsung dari aplikasi.",
      icon: "https://i.ibb.co/tBwmZYp/nurse.png",
      img: "https://placehold.co/400x250?text=Preview",
    },
    {
      title: "Integrasi WhatsApp",
      desc: "Notifikasi otomatis seperti pengingat jadwal dan hasil pemeriksaan.",
      icon: "https://i.ibb.co/cb4xZSn/wa.png",
      img: "https://placehold.co/400x250?text=Preview",
    },
  ];

  const [openIndex, setOpenIndex] = useState(null);

  return (
    <div className="min-h-screen bg-gray-100 p-10 flex justify-center">
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl w-full">
        {items.map((item, i) => (
          <div
            key={i}
            className="bg-white rounded-2xl shadow hover:shadow-xl cursor-pointer border border-gray-200 transition"
            onClick={() => setOpenIndex(openIndex === i ? null : i)}
          >
            <div className="flex items-center gap-3 p-5">
              <div className="w-12 h-12 rounded-xl flex items-center justify-center bg-[#166F61]/20">
                <img src={item.icon} className="w-7 h-7" />
              </div>
              <h2 className="text-lg font-semibold text-gray-800">{item.title}</h2>
              <span className="ml-auto text-2xl text-gray-600 select-none">
                {openIndex === i ? "−" : "+"}
              </span>
            </div>

            <div
              className={`grid transition-all duration-300 ease-in-out overflow-hidden ${
                openIndex === i ? "grid-rows-[1fr] opacity-100" : "grid-rows-[0fr] opacity-0"
              }`}
            >
              <div className="overflow-hidden px-5 pb-5 flex gap-4">
                <div className="text-sm text-gray-700 w-1/2">{item.desc}</div>
                <img
                  src={item.img}
                  className="rounded-xl shadow w-1/2 object-cover"
                />
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}
