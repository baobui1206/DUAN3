
window.onload = function() {
  const ctx = document.getElementById('doanhThuNgayChart').getContext('2d');
  const doanhThuNgayChart = new Chart(ctx, {
    type: 'line', // Biểu đồ đường
    data: {
      labels: ngays, 
      datasets: [{
        label: 'Doanh thu (VNĐ)',
        data: doanhthu,  
        fill: true,
        backgroundColor: 'rgba(153, 102, 255, 0.2)',
        borderColor: 'rgba(153, 102, 255, 1)',
        tension: 0.2
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            callback: function(value) {
              return value.toLocaleString('vi-VN') + '₫'; // Hiển thị định dạng VNĐ
            }
          }
        }
      }
    }
  });
};
const ctx1 = document.getElementById('doanhThuSanPhamChart').getContext('2d');
const doanhThuSanPhamChart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: tenSp,  // Tên sản phẩm
        datasets: [
          {
            label: 'Doanh thu sản phẩm(₫)',
            data: doanhThuSp,  // Doanh thu của các sản phẩm
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            yAxisID: 'y'
        },
        {
          label: 'Số lượng sản phẩm',
          data: soLuongSp,  
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1,
          yAxisID: 'y1'
      }
    ]
    },
    options: {
      responsive: true,
      scales: {
          y: {
              beginAtZero: true,
              position: 'left',
              ticks: {
                  callback: function(value) {
                      return value.toLocaleString('vi-VN') + '₫';
                  },
                  font: {
                      size: 12
                  }
              }
          },
          y1: {
              beginAtZero: true,
              position: 'right',
              grid: {
                  drawOnChartArea: false // Tắt đường kẻ trùng
              },
              ticks: {
                  callback: function(value) {
                      return value + ' sản phẩm';
                  },
                  font: {
                      size: 12
                  }
              }
          },
          x: {
              ticks: {
                  font: {
                      size: 12
                  }
              }
          }
      },
      plugins: {
          legend: {
              labels: {
                  font: {
                      size: 12
                  }
              }
          }
      }
  }
});
const ctxPie = document.getElementById('pieChartTrangThai').getContext('2d');

const pieChartTrangThai = new Chart(ctxPie, {
  type: 'pie',
  data: {
    labels: trangThaidh,
    datasets: [{
      data: countTrangThaidh,
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF','#FF5733'],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom'
      }
    }
  }
});
const ctxDonut = document.getElementById('donutChartDanhGia').getContext('2d');

const donutChartDanhGia = new Chart(ctxDonut, {
  type: 'doughnut',
  data: {
    labels: idSp,
    datasets: [{
      label: 'Đánh giá trung bình',
      data: danhGiaTrungBinh,
      backgroundColor: [
        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
        '#9966FF', '#FF9F40', '#66FF66', '#FF6666'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `${context.label}: ${context.parsed} ★`;
          }
        }
      }
    }
  }
});



           